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
            'name' => 'Ikhwan',
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

        // category news

        // News
    }
}
