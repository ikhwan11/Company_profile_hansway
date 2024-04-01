<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Applicant;
use App\Models\Career;
use App\Models\Client;
use App\Models\Company;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\News;
use App\Models\Page;
use App\Models\Service;
use App\Models\Service_text;
use App\Models\Service_why;
use App\Models\Slider;
use App\Models\Ads;
use Illuminate\Http\Request;

use App\Notifications\ApplicationReceived;
use App\Notifications\ContactReceived;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationReceived as ApplicationReceivedMail;
use App\Models\Contact;
use App\Models\News_category;
use App\Models\News_comment;
use Carbon\Carbon;



class MainController extends Controller
{
    public function index()
    {
        return view('front_end/beranda', [
            'title' => 'PT. HANSWAY INDONESIA',
            'sliders' => Slider::all(),
            'navbar' => Company::all(),
            'abouts' => About::all(),
            'service_texts' => Service_text::all(),
            'service_whies' => Service_why::all(),
            'clients' => Client::all(),
            'news' => News::Latest()->paginate(3),
        ]);
    }

    public function about()
    {
        return view('front_end/about-us', [
            'title' => 'About Us',
            'abouts' => About::all(),
            'image' => Page::find(1),
            'clients' => Client::all(),
            'service_whies' => Service_why::all(),
            'navbar' => Company::all()
        ]);
    }

    // services

    public function service()
    {
        return view('front_end/services', [
            'title' => 'Our Services',
            'navbar' => Company::all(),
            'image' => Page::find(2)
        ]);
    }
    public function service_jenis()
    {
        return view('front_end/services-jenis', [
            'title' => 'Our Services',
            'navbar' => Company::all(),
        ]);
    }
    public function service_single_ship_service()
    {
        return view('front_end/Service/services-single-ship-service', [
            'title' => 'Our Services',
            'navbar' => Company::all(),
            'data' => Service::where('category', '1')->get()
        ]);
    }
    public function service_single_ship_chandlers()
    {
        return view('front_end/Service/services-single-ship-chandlers', [
            'title' => 'Our Services',
            'navbar' => Company::all(),
            'data' => Service::where('category', '2')->get()
        ]);
    }
    public function service_single_warehouse_logistic()
    {
        return view('front_end/Service/services-single-warehouse-logistic', [
            'title' => 'Our Services',
            'navbar' => Company::all(),
            'data' => Service::where('category', '3')->get()
        ]);
    }
    public function services_single(Service $service)
    {
        return view('front_end/Service/services-detail', [
            'title' => 'Our Services',
            'navbar' => Company::all(),
            'whies' => Service_why::all(),
            'data' => $service
        ]);
    }

    // news

    public function news(News_comment $komen)
    {

        return view('front_end/news/news-and-article', [
            'title' => 'News & Article',
            'navbar' => Company::all(),
            'hot' => News::where('status', 'Featured')->latest()->take(3)->get(),
            'data_atas' => News::latest()->take(4)->get(),
            'image' => Page::find(5),
            'semua' => News::latest()->paginate(6),
            'cat' => News_category::latest()->take(20)->get(),
            'featured' => News::where('status', 'Featured')->latest()->take(6)->get(),
            'trending' => News::where('status', 'Trending')->latest()->take(6)->get(),
            'ads_land' => Ads::where('status', 'ON')->where('tipe', 'Landscape')->first(),
            'ads_square' => Ads::where('status', 'ON')->where('tipe', 'Square')->first(),
            'jum_com' => News::where('id', $komen->news_id)->count()
        ]);
    }
    public function news_single(News $news, News_comment $komen)
    {

        $news->increment('views');

        return view('front_end/news/news-single', [
            'title' => 'News & Article',
            'navbar' => Company::all(),
            'recent' => News::latest()->paginate(2),
            'trending' => News::where('status', 'Trending')->take(6)->get(),
            'cat' => News_category::latest()->paginate(20),
            'featured' => News::where('status', 'Featured')->take(6)->get(),
            'data' => $news,
            'ads_land' => Ads::where('status', 'ON')->where('tipe', 'Landscape')->first(),
            'ads_square' => Ads::where('status', 'ON')->where('tipe', 'Square')->first(),
            'comment' => News_comment::where('news_id', $news->id)->latest()->get(),
            'jum_com' => News_comment::where('news_id', $news->id)->count()
        ]);
    }

    public function news_category()
    {

        $data = News::latest()->filter(request(['search']))->paginate(2)->withQueryString();

        return view('front_end/news/news-category', [
            'title' => 'News & Article',
            'navbar' => Company::all(),
            'data' => $data,
            // footer
            'ads_land' => Ads::where('status', 'ON')->where('tipe', 'Landscape')->first(),
            'ads_square' => Ads::where('status', 'ON')->where('tipe', 'Square')->first(),
            'featured' => News::where('status', 'Featured')->take(6)->get(),
            'cat' => News_category::latest()->take(20)->get(),
            'trending' => News::where('status', 'Trending')->take(6)->get(),
        ]);
    }

    // career
    public function career()
    {
        return view('front_end/career', [
            'title' => 'Career',
            'navbar' => Company::all(),
            'careers' => Career::all(),
            'image' => Page::find(1)
        ]);
    }

    public function career_apply(Career $career)
    {
        return view('front_end/career-apply', [
            'title' => 'Career-apply',
            'navbar' => Company::all(),
            'data' => $career,
            'image' => Page::find(1)
        ]);
    }

    public function career_store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'applicant_name' => 'required|max:255',
                'id_lowongan' => 'required',
                'alamat' => 'required|max:255',
                'email' => 'required|max:255|unique:applicants',
                'surat_lamaran' => 'required',
                'cv' => 'required|file|mimes:pdf|max:5120',
                'g-recaptcha-response' => 'required|captcha'
            ],
            [
                'g-recaptcha-response.required' => 'Please check the capcha',
            ]
        );


        if ($request->file('cv')) {
            $validatedData['cv'] = $request->file('cv')->store('cv-pelamar');
        }

        $applicant = Applicant::create($validatedData);

        Notification::route('mail', 'recruitment@hanswayindonesia.com')
            ->notify(new ApplicationReceived($applicant));

        return redirect('/Career')->with('pesan', 'Lamaranmu sudah masuk, terima kasih');
    }


    // project
    public function projects()
    {
        return view('front_end/project', [
            'title' => 'Our Project',
            'navbar' => Company::all(),
        ]);
    }

    // gallery
    public function gallery()
    {
        return view('front_end/gallery', [
            'title' => 'Gallery & Client',
            'navbar' => Company::all(),
            'image' => Page::find(4),
            'kategori' => GalleryCategory::all(),
            'data' => Gallery::latest()->get(),
            'clients' => Client::latest()->paginate(24)
        ]);
    }

    // contact
    public function contact_us()
    {
        return view('front_end/contact-us', [
            'title' => 'Contact Us',
            'navbar' => Company::all(),
            'image' => Page::find(4)
        ]);
    }

    public function contact_store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|unique:contacts',
                'phone' => 'max:255',
                'company' => 'max:255',
                'request' => 'required',
                'g-recaptcha-response' => 'required|captcha'
            ],
            [
                'g-recaptcha-response.required' => 'Please check the capcha',
            ]
        );

        $contact = Contact::create($validatedData);

        Notification::route('mail', 'ikhwan@hanswayindonesia.com')
            ->notify(new ContactReceived($contact));

        return redirect('/Contact-us')->with('pesan', 'Thank you for contacting us');
    }

    public function contact_oasis(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|unique:contacts',
                'phone' => 'max:255',
                'company' => 'max:255',
                'request' => 'required',
                'g-recaptcha-response' => 'required|captcha'
            ],
            [
                'g-recaptcha-response.required' => 'Please check the capcha',
            ]
        );

        $contact = Contact::create($validatedData);

        Notification::route('mail', 'ikhwan@hanswayindonesia.com')
            ->notify(new ContactReceived($contact));

        return redirect('/Oasis-Mas-Cluster')->with('pesan', 'for contacting us');
    }

    public function maintenance()
    {
        return view('front_end/maintenance', [
            'title' => 'News Page is Under Maintenance!',
        ]);
    }
}
