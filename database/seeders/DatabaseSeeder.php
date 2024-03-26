<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\About;
use App\Models\Career;
use App\Models\Client;
use App\Models\Company;
use App\Models\Gallery;
use App\Models\News;
use App\Models\News_category;
use App\Models\Page;
use App\Models\Project;
use App\Models\Service_text;
use App\Models\Service_why;
use App\Models\Service;
use App\Models\Slider;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // users
        User::create([
            'name' => 'Admiansyah',
            'email' => 'admin@gmail.com',
            'jabatan' => 'Web Developer',
            'no_hp' => '089766544343',
            'role' => '1',
            'password' => bcrypt('123admin'),
            'image' => 'user-images/4sJu0RiMVfbONgjGkBwHTtXelCHSPadDqI7RDJMQ.jpg'
        ]);
        User::create([
            'name' => 'sosmediah sari',
            'email' => 'sosmed@gmail.com',
            'jabatan' => 'Social Media Specialist',
            'no_hp' => '089766544343',
            'role' => '2',
            'password' => bcrypt('123admin'),
            'image' => 'user-images/hG1oVQlNF3IHsfZEAUL8OrUg5Ldu9jYyLK0JvElm.jpg'
        ]);
        User::create([
            'name' => 'humananto',
            'email' => 'humananto@gmail.com',
            'jabatan' => 'Human Resource',
            'no_hp' => '089766544343',
            'role' => '3',
            'password' => bcrypt('123admin'),
            'image' => 'user-images/NdaEWNEf2GHVPknr3YqIw4DJfr6i7Tw4yixZCaPY.jpg'
        ]);

        // About
        About::create([
            'title' => 'Provide Best Services And High Quality Products',

            'vision' => '<div>Following the rapid development in the domestic as well as the international marine industry, ships are constantly being built or renewed and the marine logistic is in rising demand, therefore to support this business chain, "PT. Hansway Indonesia" cultivates and maintains 4 business sectors that cater to industries needs such as equipment and services.<br>&nbsp;<br>&nbsp;Our Vision is to become a ship chandler enterprise, that could do trading in the local as well as the international market and to be recognized as "QUICKER and BETTER" as Ships equipment and Services provider.<br>&nbsp;<br>&nbsp;The Quality of Our service, demonstrating professionalism from every personnel who are actively involved in supporting the marine industry through our services in covering the business area, dedicated to be the "Customers first choice and delivering positive impact for the local and international marine industry".<br><br></div>',

            'mission' => '<div>- Provide Services and Solutions to customers.<br><br></div><div>- Serve all Customers to the convenience level of a "one-stop-service".<br><br></div><div>- Supply Ship Equipment with the quality of an accepted standard.<br><br></div><div>- Improve Companys values by encouraging creativity, innovation and&nbsp; cultivate competence in human resources for every parties involved.<br><br></div><div>- Operate business activities that benefit all parties and with a concern for good cooperation.</div><div><br></div>',

            'about_text' => '<div><strong>PT. Hansway Indonesia was established in 2010 as a strategic partner company to PT. Widi Jasa Ekspress - Batam due to the market growth of its client in marine and shipping industry.</strong><br><br></div><div>PT. Hansway Indonesia consistently provides personalize services for all owners and charterers with their needs of supplies and services within ship operational, With our advantage in several business sectors such as in Ship and Industry Construction, Engineering &amp; Repair, Logistic Services, Tugboat &amp; Barge Charter Services &amp; Ship Chandler for Marine and Shipping Industry, while the sister company, PT. Pelayaran Samudra Tujuh ranged in Ship Management and Agency.<br><br></div><div>PT. Hansway Indonesia provide best services and high quality products with leading brands in the market with very competitive price for the material supply &amp; services with professionalism of the team with high skill &amp; experienced personnel within marine &amp; shipping industry.<br><br></div>',

            'image' => 'about-images/XUeJ4g5DT9087Kh5zd8uJFwDa3yFyUtGL9bTpOV6.jpg',


        ]);

        // career
        Career::create([
            'position' => 'Clinic Manager / Manager Operasional Ekles Clinic Aesthetic & Laser',
            'slug' => 'clinic-manager-or-manager-operasional-ekles-clinic-aesthetic-and-laser',

            'qualification' => '<div><strong>Keuntungan</strong></div><ul><li>BPJS Kesehatan dan Ketenagakerjaan</li><li>Gaji Pokok dan komisi</li><li>Asuransi JSHK</li></ul><div><br></div><div>Deskripsi Pekerjaan</div><div><strong>EKLES CLINIC Aesthetic &amp; Laser</strong> sebagai salah satu klinik kecantikan yang berkembang pesat, terlengkap dan terkenal di kawasannya, saat ini kami adalah perusahaan yang menuju 100 cabang di Indonesia membuka kesempatan bagi anda untuk berkarir bersama kami untuk posisi sebagai :</div><div><strong>Clinic Manager / Manager Operasional<br></strong><br></div><div><strong>Persyaratan :</strong></div><ul><li>Usia Maksimal 40 Tahun</li><li>Memiliki pengalaman minimal 1 Tahun dibidang managerial</li><li>Berpenampilan rapi dan sopan</li><li>Jujur, beretetika, pekerja keras baik dalam berkomunikasi lisan maupun verbal</li><li>Latar pendidikan minimal D3/S1</li><li>Mampu melakukan riset, evaluasi dan menyusun strategi untuk pengembangan klinik</li><li>Menguasai microsoft office khususnya power point, word dan excel</li><li>Dapat bekerja cepat baik secara individu mauppun team</li><li>Memiliki pemahaman dalam bidang delegasi</li><li>Mampu memberikan analisa dan presentasi yang baik</li><li>Bersedia mengikuti pelatihan/training.</li></ul><div><br></div><div><strong>Benefit :</strong></div><ul><li>Gaji Pokok</li><li>Komisi individu</li><li>Komisi Pencapaian</li><li>BPJS Kesehatan</li><li>BPJS Tenagakerja</li></ul>',

            'salary_offer' => '50.000.000',

        ]);
        Career::create([
            'position' => 'Operator Produksi',
            'slug' => 'operator-produksi',

            'qualification' => '<div><strong>Kualifikasi :</strong></div><ul><li>Kewarganegaraan Indonesia (WNI)</li><li>Umur maksimal 24 tahun</li><li>Pria dan wanita</li><li>Pengalaman dan Non pengalaman</li><li>Yang memiliki pengalaman di utamakan</li><li>Tinggi badan Ideal</li><li>Siap penempatan kerja di batam</li></ul><div><br><strong>Deskripsi Pekerjaan :</strong></div><ul><li>Rapat Dan Mempersiapkan Material</li><li>Mengoperasikan Mesin Produksi</li><li>Setting Program Pada Mesin.</li><li>Menjaga Produktivitas Produksi</li><li>Menjaga Kualitas Produksi</li><li>Memastikan Produk Sampai Ke Proses Selanjutnya</li><li>Menjaga Media Kerja</li><li>Bekerja Sesuai Target</li></ul><div><br><strong>Berkas Lamaran :</strong></div><ul><li>Surat lamaran</li><li>Daftar riwayat hidup</li><li>Foto copy Ijazah/ STTB pendidikan terakhir</li><li>Foto copy SKCK dari Kepolisian yang masih berlaku</li><li>Foto copy e-KTP</li><li>Surat Keterangan Sehat dari Dokter yang terbaru</li><li>Foto copy kartu tanda pencari kerja</li><li>Pas photo terbaru ukuran 4 x 6</li><li>Memiliki NPWP</li></ul><div><br><strong>Note :</strong></div><ul><li>Hanya pelamar yang terpilih dan sesuai kualifikasi yang akan dipanggil mengikuti seleksi berikutnya. Lowongan kerja terbuka sampai kuota terpenuhi.</li><li>Hati-hati terhadap segala bentuk jenis penipuan karena sejatinya pendaftaran lowongan pekerjaan itu gratis tidak ada biaya dalam bentuk apapun.</li></ul>',

            'salary_offer' => '20.000.000',

        ]);
        Career::create([
            'position' => 'Staff Admin',
            'slug' => 'staff-admin',

            'qualification' => '<div>Pendidikan Minimal SMP, SMA/k sederajat<br><br>Bertanggung Jawab Terhadap Pekerjaan<br><br>Pria / Wanita Usia Maksimal 42 tahun<br><br>Pengalaman / Non Pengalaman<br><br>Siap Memajukan Perusahaan<br><br>Boleh berjilbab / berkacamata<br><br>Bisa Bekerja dalam team<br><br>Sopan, Elegan Jujur<br><br>Displin dalam Kerja<br><br>Fasilitas<br><br>Gaji Pokok 4,2jt s/d 6,5jt/bln (negotiable sesuai posisi)<br><br>Transportasi + harian 80rb / hari<br><br>Mess / Transport / Jemputan<br><br>Seragam, Bonus + Shifting<br><br>Jaminan kesehatan BPJS<br><br>Lembur Normative<br><br>Premi Kehadiran<br><br>FASILITAS Full</div>',

            'salary_offer' => '10.000.000',

        ]);
        Career::create([
            'position' => 'LCIR OFFICER SENIOR',
            'slug' => 'lcir-officer-senior',

            'qualification' => '<div>Deskripsi kerja :</div><ul><li>Graduation form Bachelor Degree of LAW,</li><li>Experience in Industrial Relation (IR) and same field at least 1 year,</li><li>Understanding labor regulations,</li><li>Good communication skills,</li><li>Fluent in English, spoken and written,</li><li>Good Computer skill min Microsoft Office.</li></ul>',

            'salary_offer' => '90.000.000',

        ]);

        // page
        Page::create([
            'title' => 'About page title',
            'slug' => 'about-page-title',
            'image' => 'page-title-images/X9RJr3rYplpVYMlEefNoUlYCUrQU231h3fjC14Q3.jpg',
        ]);
        Page::create([
            'title' => 'Service page title',
            'slug' => 'service-page-title',
            'image' => 'page-title-images/CIBFKjGIwJLzApk5KMbgIz1PAwoLfFB6oaseqmK2.jpg',
        ]);
        Page::create([
            'title' => 'Project page title',
            'slug' => 'project-page-title',
            'image' => 'page-title-images/Project-title.jpg',
        ]);
        Page::create([
            'title' => 'Contact page title',
            'slug' => 'contact-page-title',
            'image' => 'page-title-images/contact-title.jpg',
        ]);
        Page::create([
            'title' => 'News page title',
            'slug' => 'news-page-title',
            'image' => 'page-title-images/News-title.jpg',
        ]);

        // service

        Service::create([
            'name' => 'Food Provisions',
            'slug' => 'food-provisions',
            'category' => '2',
            'image' => 'Services-images/0rzwl98DOG6Bf0MNW1q3FS65x57bzvJ4KIHwsech.png',

            'excerpt' => 'Hansway Indonesia is a ship chandler company that specializes in providing food provisions to ships of all types and sizes. The company offers a wide range of food products to meet the unique needs of...',

            'about_services' => '<div><strong>Hansway Indonesia is a ship chandler company that specializes in providing food provisions to ships of all types and sizes. The company offers a wide range of food products to meet the unique needs of ships when it comes to food provisioning. From beverages to canned food, and from fresh meat to spices and herbs, Hansway Indonesia has everything a ship needs to ensure that its crew is well-fed and satisfied during long voyages at sea.</strong><br><br></div><div>One of the key strengths of Hansway Indonesia is its ability to offer a diverse range of food products. The company understands that ships have unique dietary requirements, and it is committed to providing a wide range of food products to meet these requirements. Whether a ship requires fresh fruit and vegetables, or canned food and dry goods, Hansway Indonesia is able to provide the right products at the right time.<br><br></div><div>Some of the food products offered by Hansway Indonesia include beverages such as coffee, cocoa, and tea; biscuits and cakes for snacking; bread and pastries for breakfast; canned food for convenience; cereals for a healthy breakfast; dairy goods for added nutrition; dressings and vinegar for salads; dry goods such as rice and pasta; fish and seafood for protein; fresh fruit for added vitamins; fresh meat and frozen products for added protein and convenience; pickles for added flavor; poultry fresh and frozen for added protein; sauces and gravies for added flavor; seasoning and flavor for added taste; spices and herbs for added flavor and nutrition; fresh vegetables for added vitamins; general groceries for all-around supplies; grains and nuts for added nutrition; and jam and marmalade for a sweet treat.<br><br></div><div>With its diverse range of food products and commitment to providing high-quality ship chandler services, Hansway Indonesia has become a leading provider of food provisions to ships in Indonesia. The company is dedicated to ensuring that its customers are always satisfied with the products and services it provides, and is committed to maintaining its reputation as a reliable and trusted ship chandler company.<br><br></div>',

        ]);

        Service::create([
            'name' => 'Radio Equipment',
            'slug' => 'radio-equipment',
            'category' => '2',
            'image' => 'Services-images/50l8ggQ3TI4VfzKXFl6xjCFU0Vs7VaWepVfsdo1G.jpg',

            'excerpt' => 'Hansway Indonesia is a ship chandler company that offers a wide range of services, including the provision of radio equipment to ships of all types and sizes. As a leading ship chandler company in Ind...',

            'about_services' => '<div>Hansway Indonesia is a ship chandler company that offers a wide range of services, including the provision of radio equipment to ships of all types and sizes. As a leading ship chandler company in Indonesia, Hansway Indonesia understands the importance of having reliable and high-quality radio equipment on board a ship.<br><br></div><div>Radio equipment is an essential component of any ships communication system. It allows crew members to communicate with each other and with other ships, and it also enables them to receive important information about weather conditions and other hazards. With its extensive range of radio equipment, Hansway Indonesia is able to provide ships with the equipment they need to ensure safe and efficient communication at sea.<br><br></div><div>Hansway Indonesia offers a variety of radio equipment, including VHF radios, SSB radios, and satellite communication systems. The company works closely with its suppliers to ensure that all equipment is of the highest quality and meets all relevant safety standards. In addition, Hansway Indonesia offers installation services for all radio equipment, ensuring that it is installed correctly and is fully operational before the ship sets sail.<br><br></div><div>One of the key strengths of Hansway Indonesia is its ability to offer customized solutions to meet the unique needs of each ship. The company understands that different ships have different requirements when it comes to radio equipment, and it is committed to providing tailored solutions to ensure that each ship has the equipment it needs to communicate effectively at sea.<br><br></div><div>In addition to providing radio equipment, Hansway Indonesia also offers a range of other ship chandler services, including the provision of food supplies, fuel, lubricants, and other essential supplies. The company has a team of experienced professionals who are available to assist with any ship chandler requirements, and who are committed to providing the highest level of service to their customers.<br><br></div><div>Overall, Hansway Indonesia is a company that is dedicated to providing high-quality ship chandler services to its customers. With its focus on radio equipment, the company is able to meet the unique communication needs of ships, and is committed to ensuring that its customers are always satisfied with the products and services that it provides.<br><br></div>',

        ]);

        Service::create([
            'name' => 'Repair and Maintenance',
            'slug' => 'repair-and-maintenance',
            'category' => '1',
            'image' => 'Services-images/du9FydetArX8MqMICHwe43L65SoCWEvAOviL8fOR.jpg',

            'excerpt' => 'Hansway Indonesia is a leading provider of ship chandler services, catering to various needs of ships and marine vessels. One of their key areas of expertise is repair and maintenance, including pipe,...',

            'about_services' => '<div>Hansway Indonesia is a leading provider of ship chandler services, catering to various needs of ships and marine vessels. One of their key areas of expertise is repair and maintenance, including pipe, mechanical, steelwork, electrical, and carpentry services.<br><br></div><div>The company has a team of experienced and skilled professionals who are dedicated to providing quality services to their clients. They use the latest tools and techniques to ensure that their work is of the highest standard and meets the requirements of their clients.<br><br></div><div>In terms of pipe services, Hansway Indonesia provides a wide range of solutions such as pipe fitting, welding, and repair services. Their mechanical services include repairs and maintenance of various machinery and equipment, including engines, pumps, and compressors.<br><br></div><div>When it comes to steelwork, the company offers services such as steel fabrication, repair, and modification. They also provide electrical services such as installations, repairs, and maintenance of various electrical equipment and systems.<br><br></div><div>Lastly, Hansway Indonesia also offers carpentry services for ships and marine vessels, including repair and maintenance of woodwork and furniture.<br><br></div><div>With their expertise in repair and maintenance services, Hansway Indonesia ensures that their clients ships and marine vessels are always in top condition. They provide timely and reliable services to their clients, which helps them minimize downtime and maximize operational efficiency.<br><br></div><div>In conclusion, Hansway Indonesia is a one-stop-shop for ship chandler services, including repair and maintenance services for various ship components. Their skilled and experienced team is always ready to provide quality services to their clients and ensure that their ships and marine vessels are in optimal condition.<br><br></div>',

        ]);

        Service::create([
            'name' => 'Fumigation Service',
            'slug' => 'fumigation-service',
            'category' => '1',
            'image' => 'Services-images/Lb0CQ3KBFACW4yHjcF4SlX56oTpMHqNWC56wx2UN.jpg',

            'excerpt' => 'Hansway Indonesia is a company that offers various services in the maritime industry, including fumigation services. Fumigation is the process of using a gas or vapor to destroy pests or organisms tha...',

            'about_services' => '<div>Hansway Indonesia is a company that offers various services in the maritime industry, including fumigation services. Fumigation is the process of using a gas or vapor to destroy pests or organisms that may harm cargo or the vessel itself. It is an essential service for maritime industries, and Hansway Indonesia provides top-notch fumigation services for their clients.<br><br></div><div>The company offers fumigation services for a wide range of cargoes, such as grain, coffee, cocoa, tea, spices, tobacco, and many more. They have a team of experienced fumigation experts who use state-of-the-art equipment and techniques to ensure that the fumigation process is carried out safely and efficiently.<br><br></div><div>Hansway Indonesia is committed to providing environmentally-friendly fumigation services. They use only approved and registered fumigants that are not harmful to the environment or human health. Additionally, they strictly adhere to international regulations and guidelines set by organizations such as the International Maritime Organization (IMO) and the World Health Organization (WHO).<br><br></div><div>Their fumigation services include pre-shipment fumigation, on-board fumigation, and post-arrival fumigation. They also provide certificates of fumigation for their clients, which serve as proof that the cargo has undergone fumigation and is free from pests and organisms.<br><br></div><div>In addition to fumigation services, Hansway Indonesia also offers other services in the maritime industry, such as ship chandler, navigation equipment, mechanical parts and equipment, and more. They have a team of experts who are dedicated to providing high-quality services to their clients.<br><br></div><div>Overall, Hansway Indonesia is a reliable and reputable company that provides top-notch fumigation services to the maritime industry. Their commitment to environmentally-friendly practices and strict adherence to international regulations makes them a trustworthy partner for any maritime company in need of fumigation services.<br><br></div>',

        ]);

        Service::create([
            'name' => 'Hand Carry Arrangement',
            'slug' => 'hand-carry-arrangement',
            'category' => '3',
            'image' => 'Services-images/FNTer0TS2N5MiQbbc7P0fr4gTVaeQCd6VxsqdRvd.jpg',

            'excerpt' => 'Hansway Indonesia is a company that specializes in providing a wide range of services to the marine industry. One of the services that the company offers is hand carry arrangement.Hand carry arrangeme...',

            'about_services' => '<div>Hansway Indonesia is a company that specializes in providing a wide range of services to the marine industry. One of the services that the company offers is hand carry arrangement.<br><br></div><div>Hand carry arrangement is a service that is designed to provide convenience and peace of mind to ship owners and crew members. It involves the transportation of important documents, spare parts, and other essential items to and from ships.<br><br></div><div>Hansway Indonesia has a team of experienced and professional personnel who are trained to handle hand carry arrangements. The company ensures that all items are properly packaged and labeled to avoid any damage or loss during transportation. In addition, the team is equipped with the necessary tools and equipment to ensure that the items are handled with care and delivered on time.<br><br></div><div>The hand carry arrangement service offered by Hansway Indonesia includes pickup and delivery services to and from the ship. The company also offers storage facilities for items that need to be kept onshore for a certain period of time.<br><br></div><div>With years of experience in the industry, Hansway Indonesia has established itself as a reliable and trusted partner for hand carry arrangements. The company is committed to providing the highest level of service to its clients and ensuring that all their needs are met.<br><br></div><div>In conclusion, Hansway Indonesias hand carry arrangement service is an essential component of its comprehensive range of services for the marine industry. With its expertise and commitment to quality, the company is well-equipped to provide reliable and efficient hand carry arrangements for ship owners and crew members.<br><br></div>',

        ]);

        Service::create([
            'name' => 'Rental Heavy Lift Equipment',
            'slug' => 'rental-heavy-lift-equipment',
            'category' => '3',
            'image' => 'Services-images/GuszKplkrWsWqmyQFNsTRcu9skSnB0YRcfs1B4DA.jpg',

            'excerpt' => 'Hansway Indonesia is a company that specializes in the rental of heavy lift equipment. Founded in 1996, the company has over 25 years of experience in the industry and has become a leading provider of...',

            'about_services' => '<div>Hansway Indonesia is a company that specializes in the rental of heavy lift equipment. Founded in 1996, the company has over 25 years of experience in the industry and has become a leading provider of heavy lift equipment in Indonesia.<br><br></div><div>With a wide range of equipment available for rent, Hansway Indonesia can provide customers with everything from cranes and forklifts to bulldozers and excavators. All equipment is carefully maintained and inspected to ensure that it is in excellent working condition and ready for use.<br><br></div><div>The companys team of experienced technicians is available to provide on-site support and assistance to ensure that all equipment is used safely and effectively. Hansway Indonesia also offers training services for operators to ensure that they are properly trained to use the equipment.<br><br></div><div>In addition to its rental services, Hansway Indonesia also provides transportation and logistics services to help customers move heavy equipment to and from job sites. The company has a fleet of trucks and trailers to ensure that equipment is transported safely and efficiently.<br><br></div><div>Hansway Indonesia is committed to providing its customers with high-quality equipment and excellent service. The companys focus on safety, reliability, and customer satisfaction has helped it become a trusted partner for businesses in the construction, mining, and oil and gas industries.<br><br></div>',

        ]);

        Service_text::create([
            'title' => 'We Are The Solution In Your Work',
            'text' => '<div>Provides personalize services for all owners and charterers with their needs of supplies and services within ship operational, With our advantage in several business sectors such as in Ship and Industry Construction, Engineering &amp; Repair, Logistic Services, Tugboat &amp; Barge Charter Services &amp; Ship Chandler for Marine and Shipping Industry, while the sister company.</div>',
        ]);

        Service_why::create([
            'title' => 'CEPAT (Customer-Focus, Empathy, Professionalism, Accuracy, Trustworthy)',
            'customer_focus' => 'We understand the requirement and expectations of customers.',
            'emphaty' => 'Able to understand the feelings and experiences experienced by your company.',
            'professionalism' => 'Complete work effectively and with quality.',
            'acuracy_trustworthy' => 'Use products that suit your needs in order to achieve the price you want.',
        ]);

        // slider
        Slider::create([
            'headline' => 'SHIP CHANDLER AND SHIPING INDUSTRY SERVICES',
            'slug' => 'ship-chandler-and-shiping-industry-services',
            'body' => 'As a ship chandler, PT Hansway comes with a wide range of assortment products to fulfill marine and shipping needs. The company will deal with a wide variance of required commodities for the shipping vessel and the crew. Thus, the items can range from supply safety equipment, engine stores, supply deck, to medicine, and provision items',

            'image' => 'sliders-images/7upZMT9EQurySgHdkjHd0Qf9ipZ8LcO9qDYr9W9P.jpg',
        ]);
        Slider::create([
            'headline' => 'SHIP REPAIRS, SERVICES, AND MAINTENANCE SPECIALIZATION',
            'slug' => 'ship-repairs,-services,-and-maintenance-specialization',
            'body' => 'Ships in the marine industry require proper care and maintenance. Where necessary, the boat needs extensive repairs. Thats why PT. Hansway Indonesia provides optimal ship repairs, services, and maintenance. In addition, the company offers a wide range of products to suit all shipboard needs. Here are some of the favors from the companys provided.',

            'image' => 'sliders-images/Bgy3u53u5tvknS4L85lGbN1AuSqVbFUOmaTSecGx.jpg',
        ]);
        Slider::create([
            'headline' => 'LOGISTIC AND WAREHOUSING SUPPORT SERVICES',
            'slug' => 'logistic-and-warehousing-support-services',
            'body' => 'Warehouse and logistic services demand has skyrocketed over years. It is especially true with the rising of the digital era that increases transactions from various locations and sources. PT. Hansway try to incorporate and support the current needs by providing warehouse services for a customer that needs a place to contain products, items, and stuff',

            'image' => 'sliders-images/Bixc2B8tWFdBtOLaaF57D1mVzT7oYfl6RmiVUupR.jpg',
        ]);

        // Client
        Client::create([
            'name_client' => 'Mychlin Express Offshore Singapore',
            'image' => 'client-logo/zaeCNK1Pw4ZTjf6wbeAr6jIVwmWJsRMkCPorQ7nB.png'
        ]);
        Client::create([
            'name_client' => 'PT PAL Indonesia',
            'image' => 'client-logo/maUbZOy6CvUPVjehr0FfTgW1HwbCtRDrz8vhFHEJ.png'
        ]);
        Client::create([
            'name_client' => 'Pelindo Indonesia',
            'image' => 'client-logo/mkflWUg6c52ka9A5qOQ4KgwL8dfI68mF8ebZCkPg.png'
        ]);
        Client::create([
            'name_client' => 'Hansway International',
            'image' => 'client-logo/7Bgcf42N3IUxZZ7ZDwAwEB0V7FaDZlbohqyO0bCC.png'
        ]);
        Client::create([
            'name_client' => 'Samudera Tujuh',
            'image' => 'client-logo/zaeCNK1Pw4ZTjf6wbeAr6jIVwmWJsRMkCPorQ7nB.png'
        ]);
        Client::create([
            'name_client' => 'Widi Jasa Express',
            'image' => 'client-logo/LaKogvHetDt5Y4ePVo0OdMsMssQoIiNRmXNd0Sgd.png'
        ]);
        Client::create([
            'name_client' => 'Widi jasa samudera',
            'image' => 'client-logo/CNo2yKYGQFNH6UmwwuRen4W3PGrd5hjJBLIarHcd.png'
        ]);
        Client::create([
            'name_client' => 'Raja Poros Maritime',
            'image' => 'client-logo/2lQadCb1tjeo0hR5kMVwk9sVGnhRtdgqKs1pmpoM.png'
        ]);
        Client::create([
            'name_client' => 'Kreasi Wisata',
            'image' => 'client-logo/CR1n1bCsbfIFW3WdZ60HXrpv8Zsu6VggPYbTIizH.png'
        ]);
        Client::create([
            'name_client' => 'Sukses Personalia Samudera',
            'image' => 'client-logo/ZTZQBIM38itqk6ATmVgEMMspHWvpWesDTin16Bho.png'
        ]);



        // Companies
        Company::create([
            'company_name' => 'Hansway International PTE LTD',
            'slug' => 'hansway-international-pte-ltd',

            'about' => '<div><strong>Hansway International Pte Ltd</strong> is a shipping company founded in 2022 by Franky Tan, a highly experienced professional in the shipping industry with over 20 years of expertise. Franky Tan previously had a successful track record with PT. Hansway Indonesia – Batam, and he decided to expand his business by establishing Hansway International Pte Ltd. The company aims to become a leading and reputable player in the international marine market.<br><br>As a shipping company, <strong>Hansway International Pte Ltd</strong> likely offers a range of services related to the transportation of goods via sea. These services may include freight forwarding, cargo handling, vessel chartering, logistics management, and other related activities. With Franky Tan’s extensive experience and expertise, the company is likely to have a strong focus on providing efficient and reliable shipping solutions to its clients.</div>',

            'link' => 'https://drive.google.com/file/d/107VklS_sZOBVdv_lXqyI7RZU6dcIcw8Y/view?usp=sharing',
            'image' => 'company-logo/VcTHkBV4xlA8B44L1GArbmdEDsQY8zex9u6gvprm.png'
        ]);
        Company::create([
            'company_name' => 'Pelayaran Nasional Samudra Tujuh',
            'slug' => 'pelayaran-nasional-samudera-tujuh',

            'about' => '<div>PT. Pelayaran Nasional Samudra Tujuh was established in 2011 as an expansion of PT. Widi Jasa Ekspress – Batam which has been more than 17 Years experience In the shipping agency fields. Since 2004. Since its establishment PT. Widi Jasa Ekspress and PT.Pelayaran Nasional Samudra Tujuh has grown to be highly reputable first class shipping company or agency in Batam and Kepri area. Specializing in attending special project cargoes and offshore projects.</div><div>&nbsp;</div><div>PT. Pelayaran Nasional Samudra Tujuh (PT.Widi Jasa Ekspress ) consistently provide the personalize service to all owners and charterers with the assistance of each highly skill and qualify personnel in a full range within the shipping industry. Especially to solve all document and permit problem to relevant government authorities. In order to maintain our strong interest in developing new niches we are seeking suitable partners for shipping market on mutually beneficials terms.</div>',

            'link' => 'https://drive.google.com/file/d/18--bgpqXpDLaMHoYwoPJ4mo17jsDQ-sm/view?usp=sharing',
            'image' => 'company-logo/Muoi06yBJclC2zpoNvEzUnzCwqStN95PLF1lrwI2.png'
        ]);
        Company::create([
            'company_name' => 'Widi Jasa Samudera',
            'slug' => 'widi-jasa-samudera',

            'about' => '<div>The leading ship agency company dedicated to providing exceptional services for vessel operations. As a trusted partner in the maritime industry, we specialize in assisting ships with all their documentation requirements, ensuring a smooth and efficient journey to the port.&nbsp;<br><br>With our extensive expertise and commitment to excellence, Widi Jasa Samudra offers comprehensive support to shipowners and operators, simplifying the complex process of navigating port regulations and procedures. Our experienced team takes care of all the necessary paperwork, permits, and clearances, saving you valuable time and resources.</div>',

            'link' => 'https://drive.google.com/file/d/1j6OodrN5blOJJoVEsxlSdDklkIVUi1m-/view?usp=sharing',
            'image' => 'company-logo/qkcWHlaK9tBXtTe4aGHaOBilX5UV4fRFFR4kuUgO.png'
        ]);
        Company::create([
            'company_name' => 'Elmount Logistik Nusantara',
            'slug' => 'elmount-logistik-nusantara',

            'about' => '<div>PT Elmount Logistik Nusantara was established in 2019 as an expansion of PT Hansway Indonesia Group, which boasts almost 2 decades of experience in the shipping industry, with a particular focus on Batam Island. We evolved into a respected one-stop service shipping agency in Kepulauan Riau. PT Elmount Logistik Nusantara’s primary goal is to streamline all formalities processes. we are dedicated to delivering credible, accountable, active, and punctual services to clients, owners, and charterers. With our extensive experience, we take pride in our highly skilled and qualified personnel who specialize in handling all necessary documents and permits with government authorities in the shipping and logistics sector.</div>',

            'link' => 'https://drive.google.com/file/d/1vP3zSjX7qjfuTrtPGnYN9Li3IEXwc9ae/view?usp=sharing',
            'image' => 'company-logo/bvElCKJDdi65UqCwTEUoU4DQHoOuWK4dIw8cjaOQ.png'
        ]);
        Company::create([
            'company_name' => 'H8 Point',
            'slug' => 'h8-point',

            'about' => '<div>-</div>',

            'link' => 'https://www.tokopedia.com/h8point',
            'image' => 'company-logo/VFr8aIXpNydMEQpB8WeKLxm5KFHdbJMlGZH8RKZR.png'
        ]);
        Company::create([
            'company_name' => 'Big House Hotel',
            'slug' => 'big-house-hotel',

            'about' => '<div>-</div>',

            'link' => 'https://www.reddoorz.com/id-id/hotel/indonesia/batam/lubuk-baja/baloi-indah/reddoorz-baloi-batam?',
            'image' => 'company-logo/3oVP03Xa4WcSgs6QJTyB6BDg4iCsRwcTDIGuIsQZ.png'
        ]);
        Company::create([
            'company_name' => 'Hansway Safetindo Bahari',
            'slug' => 'hansway-safetindo-bahari',

            'about' => '<div>PT. Hansway Safetindo Bahari has experienced qualified personnel in the Sales, Support, and Operation team equipt with knowledge, dedication, and passionate in accomplishing the jobs entrusted to our company. We are able to provide expert knowledge, information, the best quality of products, and Affordable prices for cost reduction to help serve our customers’ needs.&nbsp;<br><br>PT. Hansway Safetindo Bahari is constantly improving internally in purpose to provide the best level of quality and service to our customers.</div>',

            'link' => 'https://drive.google.com/file/d/1VllgcAfCHP9GZCnXFBN_JLWIHgznOAUE/view?usp=sharing',
            'image' => 'company-logo/mw1uN8B20HjozIm3adbvjChICLTjPkYi44xxRiLM.png'
        ]);
        Company::create([
            'company_name' => 'Sukses Personalia Samudera',
            'slug' => 'sukses-personalia-samudera',

            'about' => '<div>Welcome to Sukses Personalia Samudera, where we redefine the paradigm of human resource utilization within the shipping industry. As a highly regarded HR solutions provider, focusing solely on the maritime sector, we possess an intrinsic understanding of the distinct impediments your shipping business faces in terms of talent acquisition, seamless management, and long-term retention. Leveraging our extensive expertise and unyielding commitment, we empower your crew to become the paramount driving force behind your unwavering achievements.&nbsp;<br><br>At Sukses Personalia Samudera, we firmly believe that the cornerstone of a thriving maritime enterprise lies in the quality of its human resources. We specialize in delivering comprehensive HR solutions meticulously designed to optimize crew recruitment, training, and development. Whether you require skilled seafarers, competent officers, or proficient onshore staff, we possess the profound industry knowledge and extensive network to meet your specific requirements with utmost professionalism and efficiency.</div>',

            'link' => 'https://www.spsamudera.com/',
            'image' => 'company-logo/x3g21F2o54BONsT6XbsbLDNZFbAmENwQMcQnXu0Z.png'
        ]);

        News::create([
            'id_user' => '1',
            'title' => 'Hansway Indonesia Groups Annual Gathering: Fostering Unity through Connect, Communicate, and Collaborate',

            'slug' => 'hansway-indonesia-groups-annual-gathering:-fostering-unity-through-connect,-communicate,-and-collaborate',

            'source' => '',
            'category' => 'hansway-indonesia-group',
            'image' => 'News-images/FHd0ajanO8aWPlbkxVXeIdcrqRwC3HSSXLEeBDuv.jpg',
            'excerpt' => 'On December 9, 2023, Hansway Indonesia Group held an annual event, namely a company gathering, which lasted for 2 days from December 9 to 10, 2023, at Harris Resort Marina, Batam. The focus of this ev...',

            'body' => '<div><strong>On December 9, 2023</strong>, Hansway Indonesia Group held an annual event, namely a company gathering, which lasted for 2 days from December 9 to 10, 2023, at Harris Resort Marina, Batam. The focus of this event revolves around the concept of 3C, emphasizing the importance of connecting, communicating, and collaborating. The event was held to strengthen relations between employees from various subsidiaries that are members of the Hansway Indonesia Group’s, including: &nbsp;<br><br></div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PT. Hansway Indoensia</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PT. Widi Jasa Samudera</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PT. Samudera Tujuh</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PT. Hansway International</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PT. Hansway Safetindo Bahari</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PT. Elmount Logistik Nusantara</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PT. Dian Kosmopolitan</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;PT. Kreasi Wisata Impian Tour &amp; Travel</div><div>·&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Big House Hotel &amp; Pagi Sore Hotel<br><br></div><div>The event started in the morning at 8 a.m. on Saturday, December 9, 2023, where all Hansway Indonesia Group employees gathered and chatted with each other. One of the Hansway Indonesia Group employees said, "This event is eagerly awaited and is held once a year. I was surprised there were so many new faces in this company."<br><br>he event started by playing various very exciting games organized by event officers from Harris Resort, where the aim of each game was to build solidarity, cooperation, communication, and teamwork. In accordance with the theme promoted by the Hansway Indonesia Group.<br><br></div><div>Not only that, the event was continued by holding a joint dinner between employees and also the employees family members themselves, as well as various unique performances such as dancing, drama, and singing performed by Hansway Indonesia Group employees. Apart from that, Hansway Indonesia Group also distributed free lucky draws with hundreds of attractive prizes for Hansway Indonesia Group employees, ranging from cash to various grand prizes such as TVs, smartphones, and many more.<br><br></div><div>Most employees said that events like this should continue to be held because they can establish communication between company employees under the auspices of the Hansway Indonesia Group so that solidarity and cooperation between companies can be established.&nbsp;</div>',

            'status' => ''

        ]);

        News::create([
            'id_user' => '1',
            'title' => 'PIS Strengthens Global Role with Two of the Worlds Largest Environmentally Friendly Gas Tankers, Indonesia Prepares to Take the World Market Further',

            'slug' => 'pis-strengthens-global-role-with-two-of-the-worlds-largest-environmentally-friendly-gas-tankers,-indonesia-prepares-to-take-the-world-market-further',

            'source' => 'https://www.idntimes.com/business/economy/amara-zahra/pis-tambah-dua-kapal-tanker-gas-ramah-lingkungan?page=all',
            'category' => 'industry-news',
            'image' => 'News-images/mlbN9zs861Nn5MLFDdjBK0euLBZ3XJmGwTwRFYym.jpg',
            'excerpt' => 'On Tuesday, January 9, 2024, PT Pertamina International Shipping (PIS), in collaboration with a global energy trading company (BGN), inaugurated two giant gas tankers (VLGC) made in South Korea that a...',

            'body' => '<div><br>On Tuesday, January 9, 2024, PT Pertamina International Shipping (PIS), in collaboration with a global energy trading company (BGN), inaugurated two giant gas tankers (VLGC) made in South Korea that are very environmentally friendly, named VLGC Pertamina Gas Tulip and VLGC Pertamina Gas Bergenia, which are optimized to transport LPG both domestically and internationally.<br><br>Tulips and Bergenia were chosen because they have unique meanings for PIS and BGN. Tulip symbolizes majesty, and Bergenia symbolizes strength. The PIS fleet now totals 97 vessels, including 61 tankers operating overseas.<br><br></div><div>“We plan to add 6 VLGCs in 2024, starting with 2 VLGCs in the beginning of the year, which will also strengthen PIS position in the global LPG transportation business.” Yoki, PIS Chief Executive Officer.<br><br></div><div>One of the main advantages of the VLGC Pertamina Gas Bergenia and VLGC Pertamina Gas Tulip is that the vessels are environmentally friendly as they have two dual fuel tanks that maximize the use of gas and low-sulfur fuel. In addition, VLGC Pertamina Gas Bergenia and VLGC Pertamina Gas Tulip have the latest technology that allows for more efficient use of fuel, increasing vessel speed by up to 16 percent.<br><br></div><div>“The presence of these two VLGC vessels will certainly improve Pertamina Groups ability to secure energy supplies to support national energy security. Their cutting-edge technology is proof of Pertamina Groups commitment to sustainable business.” said Pertamina CEO Nicke Widyawati in a written statement on Monday, January 15, 2024.<br><br></div><div>With the presence of these two giant gas tankers, PIS has increased its expansion routes to the global market, from initially having only 11 international routes in 2021 to now increasing to 50 routes.&nbsp;</div>',

            'status' => ''

        ]);
        News::create([
            'id_user' => '1',
            'title' => 'Startling! Batam Shipping Industry Company Turns Out to be Experiencing a Labor Crisis: Companies are Still Having Difficulty Finding Skilled Workers',

            'slug' => 'startling!-batam-shipping-industry-company-turns-out-to-be-experiencing-a-labor-crisis:-companies-are-still-having-difficulty-finding-skilled-workers',

            'source' => 'https://www.rri.co.id/daerah/518431/waduh-tenaga-untuk-industri-perkapalan-masih-kurang',
            'category' => 'hot-topic',
            'image' => 'News-images/zJueWLLehT2UTCIhzo9To64dzXKflCqUbzW5E3Av.jpg',
            'excerpt' => 'Batam shipping businesses are still short of skilled employees, despite many orders for boat work and repairs. They need more employees with the necessary skills to complete this work.According to Mar...',

            'body' => '<div>Batam shipping businesses are still short of skilled employees, despite many orders for boat work and repairs. They need more employees with the necessary skills to complete this work.<br><br></div><div>According to Mariati Bangun, Secretary of Ikatan Pengusaha Perkapalan &amp; Lepas Pantai Indonesia (IPERINDO) Kepri, continues to require employees with the right qualifications. They will even continue to contact subcontractors and work together with welding training centers in order to hire qualified workers.<br><br></div><div>According to Mariati, even though it has absorbed many employees and even brought in employees from outside batam, there are still not enough employees with the special skills needed. “orders are still yesterdays orders, orders are still running, but we cant finish because we still lack employees, so shipping friends say the project delay is because there is not enough labor. From our friends, we have also cooperated with training institutions; taking labor from outside batam is also applied but in accordance with the class of shipyard, there is nothing”<br><br></div><div>This shortage of employees has almost occurred in less than a year. At the beginning of 2023, Ali Ulai, chairman of IPERINDO Kepri, admitted that in order to complete the ship orders that have increased since the end of 2022, he needs thousands of workers. “We still need welders; those from Java island have also been taken, but now its mostly G3 welders. The G3 class is usually for welding such as doors and trellises; what is really needed now is G5 and G6 for welding ships. The government must be responsive in training workers in that section. I feel sorry for those who are still unemployed in Indonesia.”<br><br></div><div>Currently, there are more than 250 shipyards in Indonesia, most of which are located in Batam, and they build various types of vessels ranging from passenger ships, cargo ships, and special-purpose vessels. Shipyards across Indonesia have the largest docking graving facilities, at 300,000 dead weight tons (DWT).&nbsp;</div>',

            'status' => ''

        ]);
        News::create([
            'id_user' => '1',
            'title' => 'The First Fully Electric Tug Delivered to Crowley by the United States',

            'slug' => 'the-first-fully-electric-tug-delivered-to-crowley-by-the-united-states',

            'source' => 'https://www.maritime-executive.com/article/u-s-s-first-fully-electric-tug-delivered-to-crowley',
            'category' => 'economy',
            'image' => 'News-images/hll45xkCDsKPPc0TBrxZFZ1YYR5RLLhRfjlSwPiH.jpg',
            'excerpt' => 'On January 24, Crowley announced that he had approved the first delivery of a fully electric tugboat made in the United States. Now, the vessel that San Diego port officials called a "game changer" wh...',

            'body' => '<div>On January 24, Crowley announced that he had approved the first delivery of a fully electric tugboat made in the United States. Now, the vessel that San Diego port officials called a "game changer" when it was ordered in 2021 will complete final tests and be delivered to California when it is expected to enter service in early summer.<br><br></div><div>The tug, named eWolf, was built in collaboration with Crowley, which owns and operates the vessel, as well as federal, state, and local government partners. The tug was built by Master Boat Builders at its shipyard in Coden, Alabama, with Crowley Engineering Services handling on-site construction.<br><br></div><div>When the ship is delivered in July 2021, Croley emphasized that the ships design will allow it to operate entirely on electric power with full performance and zero emissions. With a storage capacity of six megawatt-hours, eWolf can operate for a full day. The vessel has two generators on board for backup and longer transit. During its first ten years of operation, the vessel is expected to reduce NOx emissions by 178 tons and CO2 by 3,100 metric tons. Each year, modern tugs consume more than 30,000 gallons of diesel fuel.<br><br></div><div>"The eWolf demonstrates where the maritime industry can go, in terms of both innovation and sustainability, with solid partnerships between owners, designers, suppliers, and shipyards," said Garrett Rice, president of Master Boat Builders. "We are proud to have partnered with Crowley in the construction of the eWolf and look forward to seeing her at work in San Diego very soon."&nbsp;<br><br></div><div>Crowley reports work is also underway to complete the microgrid shoreside charging station at the Port of San Diego to support the vessel’s operations.&nbsp;<br><br></div><div>The growing trend of using battery and electric propulsion for harbor and inland shipping vessels is supported by this new tug. Last year, Kirby Inland Marine ordered the first hybrid electric inland tug in the United States. New Zealand, Canada, and China are also already using electric tugs, and for some customers, Turkish shipyards have already started building. Last October, the Port of Antwerp-Bruges announced that it had ordered Europes first electric tugboat.&nbsp;</div>',

            'status' => ''

        ]);
        News::create([
            'id_user' => '1',
            'title' => 'Bapenda Kepri Intensively Collects Heavy Equipment Tax to Reach Target of IDR 4.2 Billion',

            'slug' => 'bapenda-kepri-intensively-collects-heavy-equipment-tax-to-reach-target-of-idr-4.2-billion',

            'source' => 'https://metro.batampos.co.id/bapenda-target-kumpulkan-pajak-alat-berat-rp-42-miliar',
            'category' => 'hot-topic',
            'image' => 'News-images/mpDKsvvZh25hVGrs6B4QOMldb0bDh2fqRqDxfgvi.jpg',
            'excerpt' => 'Since January 5, 2024, the Regional Revenue Agency (Bapenda) of Riau Islands Province (Kepri) has started collecting heavy equipment tax and is targeted to reach Rp 4.2 billion in revenue in 2024.&nbs...',

            'body' => '<div>Since January 5, 2024, the Regional Revenue Agency (Bapenda) of Riau Islands Province (Kepri) has started collecting heavy equipment tax and is targeted to reach Rp 4.2 billion in revenue in 2024.&nbsp;<br><br></div><div>Diky Wijaya, Head of Bapenda Kepri, said that currently there are around 3,000 pieces of heavy equipment recorded throughout the Riau Islands. Of that number, most are in Batam City. "The heavy equipment tax rate is still the same as before, which is 0.2%," said Diky on Wednesday (31/1).<br><br></div><div>The Riau Islands Provincial Government continues to make every effort to maximize the potential of local taxes to increase regional revenue. Local taxes are one of the pillars of regional development and the economy.<br><br></div><div>"This year we will lead to digitalization; later, together with the Ministry of Home Affairs and the Traffic Corps (korlantas), we will make new innovations to make it easier for people to pay taxes," said Diky.<br><br></div><div>Previously, UPT Samsat Batuaji stated that they had recorded heavy equipment operating in business and industrial areas in Batuaji and Sagulung.<br><br></div><div>Patrick Nababan, head of UPT Samsat Batuaji, said that so far, 493 pieces of heavy equipment have been recorded, mostly those operating in the shipyard industrial area.<br><br></div><div>"Since 2023, officers have continued to move to collect data from companies. 34 companies have been visited, and a total of 493 heavy vehicles have been recorded," said Patrick.<br><br></div><div>This heavy equipment data collection is in accordance with the direction of Law No. 1 of 2022 concerning Financial Relations between the Central Government and Regional Governments (HKPD), one of which is the new tax on heavy equipment.&nbsp;</div>',

            'status' => ''

        ]);
        News::create([
            'id_user' => '1',
            'title' => 'Kabupaten Karimun Belum Mampu Raih Adipura Kencana',

            'slug' => 'kabupaten-karimun-belum-mampu-raih-adipura-kencana',

            'source' => 'https://www.batamnews.co.id/berita-109784-kabupaten-karimun-belum-mampu-raih-adipura-kencana.html',
            'category' => 'hot-topic',
            'image' => 'News-images/pByi6Q28ed4a0zw6ynCGuUxmImLBMXeKIppDEn2k.jpg',
            'excerpt' => 'Karimun, Batamnews - Kabupaten Karimun belum berhasil meraih penghargaan Adipura Kencana, meskipun telah menunjukkan upaya dan komitmen yang kuat dalam bidang kebersihan lingkungan. Hal ini diketahui...',

            'body' => '<div><strong>Karimun, Batamnews</strong> - Kabupaten Karimun belum berhasil meraih penghargaan Adipura Kencana, meskipun telah menunjukkan upaya dan komitmen yang kuat dalam bidang kebersihan lingkungan. Hal ini diketahui setelah hasil penilaian yang dilakukan belum lama ini.<br><br></div><div>Adipura Kencana merupakan penghargaan tertinggi dalam bidang kebersihan lingkungan yang bisa diraih setelah kabupaten atau kota meraih Adipura Kirana atau setelah mendapat empat kali Adipura berturut-turut. Kabupaten Karimun sebelumnya telah berhasil meraih Adipura secara berturut-turut pada tahun 2017, 2018, 2019, dan 2022.<br><br></div><div>Pada tahun 2023, Pemerintah Kabupaten Karimun telah menargetkan untuk meraih Adipura Kencana dan melakukan berbagai persiapan untuk mencapai target tersebut.&nbsp;<br><br></div><div>Namun, pada penilaian Adipura tahun 2023, Kabupaten Karimun hanya mampu meraih sertifikat Adipura. Sertifikat tersebut diterima langsung oleh Wakil Bupati Karimun, Anwar Hasyim di Gedung Manggala Wanabakti KLHK.<br><br></div><div>"Bukan gagal tapi nilainya turun sehingga kita hanya dapat penghargaan sertifikat Adipura," kata Kepala Dinas Lingkungan Hidup (DLH) Kabupaten Karimun, Rita Agustina, Rabu, 6 Maret 2024.<br><br></div><div>Beliau juga menambahkan bahwa meraih Adipura Kencana tidak mudah, mengingat hanya beberapa kota seperti Surabaya, Balikpapan, Bontang, Bitung, dan Ciamis yang berhasil meraihnya.<br><br></div><div>"Adipura kencana itu tidak mudah, kemarin hanya 5 kota yang dapat, antaranya Surabaya, Balikpapan, Bontang, Bitung, san Ciamis," ujar nya.<br><br>Sebelumnya, Pemerintah Kabupaten Karimun menargetkan perolehan penghargaan tertinggi di bidang kebersihan lingkungan berupa Piala Adipura Kencana.<br><br></div><div>Target ini bisa diraih Kabupaten Karimun, apabila tahun 2023 ini kembali bisa meraih penghargaan dalam bidang kebersihan tersebut untuk kelima kalinya secara berturut-turut.<br><br></div><div>Dalam mewujudkan target tersebut, segala persiapan telah dilakukan oleh Pemerintah Kabupaten Karimun dengan melakukan pembersihan di lokasi-lokasi yang akan dinilai, salah satunya Pasar Puan Maimun.<br><br></div><div>Serta juga melibatkan unsur masyarakat untuk melakukan gotong royong bersih-bersih di setiap tempat masing-masing.<br><br></div>',

            'status' => ''

        ]);

        News_category::create([
            'name' => 'Hot Topic',
            'slug' => 'hot-topic'
        ]);
        News_category::create([
            'name' => 'Hansway Indonesia Group',
            'slug' => 'hansway-indonesia-group'
        ]);

        News_category::create([
            'name' => 'Industry News',
            'slug' => 'industry-news'
        ]);
        News_category::create([
            'name' => 'Economy',
            'slug' => 'economy'
        ]);
    }
}
