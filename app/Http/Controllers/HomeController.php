<?php

namespace App\Http\Controllers;

use App;
use Session;
use Illuminate\Http\Request;
use App\Mail\SendMail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function changeLocalization($language)
    {
        App::setLocale($language);
        Session::put('locale', $language);
        return redirect()->back();
    }

    public function index()
    {
        if(App::getLocale() == "vi"){
            $products = [
                [
                    "title" => "Thịt",
                    'image' => "images/app/category-product/meat.jpg",
                ],
                [
                    "title" => "Rau",
                    'image' => "images/app/category-product/vegetable.jpg",
                ],
                [
                    "title" => "Thực phẩm công nghệ",
                    'image' => "images/app/category-product/food_technology.jpg",
                ],
            ];

            $data = [
                [
                    "image" => "images/app/product/salad.jpg",
                    "title" => "Salad",
                    "main" => false,
                    "key" => "1",
                    "style" => "position: absolute; left: 0%; top: 0px;",
                ],
                [
                    "image" => "images/app/product/organic.jpg",
                    "title" => "Thịt Bò Úc ORGANIC",
                    "main" => true,
                    "key" => "2",
                    "style" => "position: absolute; left: 25%; top: 0px;",
                ],
                [
                    "image" => "images/app/product/spinach.jpg",
                    "title" => "Spinach",
                    "main" => false,
                    "key" => "3",
                    "style" => "position: absolute; left: 75%; top: 0px;",
                ],
                [
                    "image" => "images/app/product/isotope-01.jpg",
                    "title" => "Lemon",
                    "main" => false,
                    "key" => "4",
                    "style" => "position: absolute; left: 0%; top: 300px;",
                ],
                [
                    "image" => "images/app/product/isotope-01.jpg",
                    "title" => "Onion",
                    "main" => false,
                    "key" => "5",
                    "style" => "position: absolute; left: 75%; top: 300px;",
                ],
            ];

            $data1 = [
                [
                    'title' => 'An toàn cho sức khoẻ',
                    'content' => '
                                    <span> Bạn có thể đã từng nghe, “ Thực phẩm organic không có nhiều dưỡng chất hơn thực phẩm vô cơ”. Tuy nhiên theo tổ chức Soil Association, thực phẩm organic giúp cơ thể tang khả năng hấp thu các dưỡng chất, khoáng chất và các vitamin thiết yếu. </span>
                                    <p></p><span>Thực phẩm vô cơ thường chứa các hóc môn tăng trưởng và chất kích thích gây hại cho sức khoẻ mang đến nguy cơ tiềm ẩn về phát triển sinh lý, bệnh đường tiêu hoá, nguy hiểm hơn nữa là chất xúc tác bệnh ung thư.</span>
                                ',
                ],
                [
                    'title' => 'Bảo vệ môi trường',
                    'content' => '<span>Thực phẩm organic với các phương pháp nuôi trồng, thu hoạch chế biến không sử dụng hoá chất, phụ gia và hoocmon tăng trưởng đồng thời cũng mang lại sự cân bằng tự nhiên cho hệ sinh thái. Góp phần bảo vệ môi trường, giảm thiểu các chất hoá học có hại cho trái đất. </span>'
                ],
                [
                    'title' => 'Bảo vệ cho thế hệ tương lai',
                    'content' => '
                                    <span>Như đã được phân tích ở trên. Thế hệ con cháu chúng ta xứng đáng được bảo vệ sức khoẻ với nguồn thực phẩm organic không chất kích thích và hóc môn tăng  trưởng, sống trong môi trường trong lành không ô nhiễm bởi các hoá chất độc hại. </span>
                                    <p></p><span>Bắt đầu với việc điều chỉnh những việc nhỏ như thói quen ăn uống và mua thức ăn hang ngày, chúng ta sẽ góp phần định hình cho ngành công nghiệp thực phẩm theo xu hướng sạch và thân thiện với môi trường.</span>
                                ',
                ],
            ];
        }
        else{
            
            $products = [
                [
                    "title" => "Meat",
                    'image' => "images/app/category-product/meat.jpg",
                ],
                [
                    "title" => "Vegetable",
                    'image' => "images/app/category-product/vegetable.jpg",
                ],
                [
                    "title" => "Food technology",
                    'image' => "images/app/category-product/food_technology.jpg",
                ],
            ];
            $data = [
                [
                    "image" => "images/app/product/salad.jpg",
                    "title" => "Salad",
                    "main" => false,
                    "key" => "1",
                    "style" => "position: absolute; left: 0%; top: 0px;",
                ],
                [
                    "image" => "images/app/product/organic.jpg",
                    "title" => "Beef Australia ORGANIC",
                    "main" => true,
                    "key" => "2",
                    "style" => "position: absolute; left: 25%; top: 0px;",
                ],
                [
                    "image" => "images/app/product/spinach.jpg",
                    "title" => "Spinach",
                    "main" => false,
                    "key" => "3",
                    "style" => "position: absolute; left: 75%; top: 0px;",
                ],
                [
                    "image" => "images/app/product/isotope-01.jpg",
                    "title" => "Lemon",
                    "main" => false,
                    "key" => "4",
                    "style" => "position: absolute; left: 0%; top: 300px;",
                ],
                [
                    "image" => "images/app/product/isotope-01.jpg",
                    "title" => "Onion",
                    "main" => false,
                    "key" => "5",
                    "style" => "position: absolute; left: 75%; top: 300px;",
                ],
            ];

            $data1 = [
                [
                    'title' => 'Safe for health',
                    'content' => '
                                    <span>You may have heard, "Organic food has no more nutrients than inorganic food." However, according to Soil Association, organic foods help the body to absorb essential nutrients, minerals and vitamins. </span>
                                    <p></p><span>Inorganic foods often contain growth hormones and stimulants that are harmful to health, bringing a potential risk of physiological development, gastrointestinal disease, and more dangerous cancer catalysts.</span>
                                ',
                ],
                [
                    'title' => 'Environmental Protection',
                    'content' => '<span>Organic food with farming methods, processing and processing does not use chemicals, additives and hormones to grow and also bring a natural balance to the ecosystem. Contributing to environmental protection, minimizing harmful chemicals for the earth. </span>'
                ],
                [
                    'title' => 'Protected for future generations',
                    'content' => '
                                    <span>As analyzed above. Our children and grandchildren deserve to be protected with growth-promoting non-stimulant organic and hormonal food sources, living in a clean environment free from harmful chemicals .</span>
                                    <p></p><span>Starting with adjusting small things like eating habits and buying food every day, we will contribute to shaping the clean and environmentally friendly food industry .</span>
                                ',
                ],
            ];

        }
        return view("static.home", compact('products','data','data1'));
    }

    public function aboutUs()
    {
        if(App::getLocale() == 'vi') {
            $title = "Về công ty";
            $conten = "P.M Quỳnh Lâm được thành lập với mục đích cung cấp cho người Việt nguồn thực phẩm sạch với chất lượng cao nhất. Chúng tôi mong muốn mang lại sự thay đổi tích cực về thói quen ăn uống của người Việt và góp phần xây dựng lối sống lành mạnh, thân thiện với môi trường. ";
            $image = "images/app/about/company.png";
            $title1 = "Mục tiêu dài hạn";
            $image1 = "images/app/about/mission.jpg";
            $conten1 = "P.M Quỳnh Lâm đặt nhiệm vụ tạo nên một chu trình khép kín từ sản xuất, kinh doanh và phân phối thực phẩm sạch cũng như hữu cơ quy chuẩn hàng đầu. Với dãy sản phẩm đang từng bước được phát triển, bắt đầu từ thịt bò nhập khẩu chuẩn USDA và HACCP. Chúng tôi đang từng bước triển khai và áp dụng những công nghệ tiên tiến nhất trong nông nghiệp cũng như chăn nuôi cho chuỗi cung ứng. Đảm bảo nguồn thực phẩm tươi ngon và đạt chuẩn chất lượng cao cấp nhất hiện nay.";
            $arr = [
                [
                    "image" => "images/app/team/01.jpg",
                    "name" => "Billy Ray",
                    "position" => "Lãnh đạo"
                ],
                [
                    "image" => "images/app/team/01.jpg",
                    "name" => "Danielle Reed",
                    "position" => "Nông dân"
                ],
                [
                    "image" => "images/app/team/01.jpg",
                    "name" => "Peter Castro",
                    "position" => "Nông dân"
                ],
                [
                    "image" => "images/app/team/01.jpg",
                    "name" => "Adam Carter",
                    "position" => "Lãnh đạo"
                ],
            ];
        }
        else {
            $title = "About the company";
            $conten = "P.M Quynh Lam was established with the aim of providing Vietnamese people with clean food with the highest quality. We want to bring about a positive change in Vietnamese eating habits and contribute to building a healthy, environmentally friendly lifestyle.";
            $image = "images/app/about/company.png";
            $title1 = "Goal long-term";
            $image1 = "images/app/about/mission.jpg";
            $conten1 = "P.M Quynh Lam is tasked with creating a closed cycle from production, sales and distribution of clean and top quality organic food. With the range of products being gradually developed, starting with USDA and HACCP imported beef. We are gradually implementing and applying the most advanced technologies in agriculture as well as animal husbandry for the supply chain. Ensure fresh food sources and meet the highest quality standards today.";
            $arr = [
                [
                    "image" => "images/app/team/01.jpg",
                    "name" => "Billy Ray",
                    "position" => "Leader"
                ],
                [
                    "image" => "images/app/team/01.jpg",
                    "name" => "Danielle Reed",
                    "position" => "Farmer"
                ],
                [
                    "image" => "images/app/team/01.jpg",
                    "name" => "Peter Castro",
                    "position" => "Farmer"
                ],
                [
                    "image" => "images/app/team/01.jpg",
                    "name" => "Adam Carter",
                    "position" => "Leader"
                ],
            ];
        }
        return view("static.about_us", compact('title','title1', 'conten','conten1','image','arr','image1'));
    }

    public function contactUs()
    {
        return view("static.contact_us");
    }



    public function submitContactUs(Request $request)
    {
        $input = $request->all();
        $data = array('message' => $input["message"],'name'=>$input["name"],'email'=>$input["email"], 'phone'=>$input['phone']);
        $res = \Mail::to(env('MAIL_FROM_ADDRESS'))->send(new SendMail($data));
        return view("static.contact_us");
    }

    public function whereToBuy()
    {
        if(App::getLocale() == 'vi'){
            $data = [
                [
                    "address" => "Tòa nhà B3, Khu biệt thự Villa, 60 Giang Văn Minh, Phường An Phú, Quận 2, HCM",
                    "email" => "kinhdoanh@pmquynhlam.vn",
                    "phone" => "(+84) 931 34 34 74",
                    "id" => "1"
                ],
                [
                    "address" => "Tòa nhà B3, Khu biệt thự Villa, 60 Giang Văn Minh, Phường An Phú, Quận 2, HCM",
                    "email" => "kinhdoanh@pmquynhlam2.vn",
                    "phone" => "(+84) 931 34 34 74",
                    "id" => "2"
                ],
                [
                    "address" => "Tòa nhà B3, Khu biệt thự Villa, 60 Giang Văn Minh, Phường An Phú, Quận 2, HCM",
                    "email" => "kinhdoanh@pmquynhlam3.vn",
                    "phone" => "(+84) 931 34 34 74",
                    "id" => "3"
                ],
                [
                    "address" => "Tòa nhà B3, Khu biệt thự Villa, 60 Giang Văn Minh, Phường An Phú, Quận 2, HCM",
                    "email" => "kinhdoanh@pmquynhlam4.vn",
                    "phone" => "(+84) 931 34 34 74",
                    "id" => "4"
                ],
            ];

        } else {
            $data = [
                [
                    "address" => "B3 Building, Villa Riviera Area, 60 Giang Van Minh Street, An Phu Ward, District 2, HCM",
                    "email" => "kinhdoanh@pmquynhlam.vn",
                    "phone" => "(+84) 931 34 34 74",
                    "id" => "1"
                ],
                [
                    "address" => "B3 Building, Villa Riviera Area, 60 Giang Van Minh Street, An Phu Ward, District 2, HCM",
                    "email" => "kinhdoanh@pmquynhlam2.vn",
                    "phone" => "(+84) 931 34 34 74",
                    "id" => "2"
                ],
                [
                    "address" => "B3 Building, Villa Riviera Area, 60 Giang Van Minh Street, An Phu Ward, District 2, HCM",
                    "email" => "kinhdoanh@pmquynhlam3.vn",
                    "phone" => "(+84) 931 34 34 74",
                    "id" => "3"
                ],
                [
                    "address" => "B3 Building, Villa Riviera Area, 60 Giang Van Minh Street, An Phu Ward, District 2, HCM",
                    "email" => "kinhdoanh@pmquynhlam4.vn",
                    "phone" => "(+84) 931 34 34 74",
                    "id" => "4"
                ],
            ];

        }
        return view("static.where_to_buy", compact('data'));
    }

    public function whereToBuyDetail($id)
    {
        if(App::getLocale() == 'vi'){
            $data = [
                [
                    "address" => "Tòa nhà B3, Khu biệt thự Villa, 60 Giang Văn Minh, Phường An Phú, Quận 2, HCM",
                    "email" => "kinhdoanh@pmquynhlam.vn",
                    "phone" => "(+84) 931 34 34 74",
                    "id" => "1"
                ],
                [
                    "address" => "Tòa nhà B3, Khu biệt thự Villa, 60 Giang Văn Minh, Phường An Phú, Quận 2, HCM",
                    "email" => "kinhdoanh@pmquynhlam2.vn",
                    "phone" => "(+84) 931 34 34 74",
                    "id" => "2"
                ],
                [
                    "address" => "Tòa nhà B3, Khu biệt thự Villa, 60 Giang Văn Minh, Phường An Phú, Quận 2, HCM",
                    "email" => "kinhdoanh@pmquynhlam3.vn",
                    "phone" => "(+84) 931 34 34 74",
                    "id" => "3"
                ],
                [
                    "address" => "Tòa nhà B3, Khu biệt thự Villa, 60 Giang Văn Minh, Phường An Phú, Quận 2, HCM",
                    "email" => "kinhdoanh@pmquynhlam4.vn",
                    "phone" => "(+84) 931 34 34 74",
                    "id" => "4"
                ],
            ];
            $data1 = [];
            if($id){
                for ($i = 0; $i < count($data); $i++) {
                    if($data[$i]['id'] == $id){
                        $data1 = $data[$i];
                    }
                }
            }
        } else {
            $data = [
                [
                    "address" => "B3 Building, Villa Riviera Area, 60 Giang Van Minh Street, An Phu Ward, District 2, HCM",
                    "email" => "kinhdoanh@pmquynhlam.vn",
                    "phone" => "(+84) 931 34 34 74",
                    "id" => "1"
                ],
                [
                    "address" => "B3 Building, Villa Riviera Area, 60 Giang Van Minh Street, An Phu Ward, District 2, HCM",
                    "email" => "kinhdoanh@pmquynhlam2.vn",
                    "phone" => "(+84) 931 34 34 74",
                    "id" => "2"
                ],
                [
                    "address" => "B3 Building, Villa Riviera Area, 60 Giang Van Minh Street, An Phu Ward, District 2, HCM",
                    "email" => "kinhdoanh@pmquynhlam3.vn",
                    "phone" => "(+84) 931 34 34 74",
                    "id" => "3"
                ],
                [
                    "address" => "B3 Building, Villa Riviera Area, 60 Giang Van Minh Street, An Phu Ward, District 2, HCM",
                    "email" => "kinhdoanh@pmquynhlam4.vn",
                    "phone" => "(+84) 931 34 34 74",
                    "id" => "4"
                ],
            ];
            $data1 = [];
            if($id){
                for ($i = 0; $i < count($data); $i++) {
                    if($data[$i]['id'] == $id){
                        $data1 = $data[$i];
                    }
                }
            }
        }
        return view("static.where_to_buy_detail", compact('data1'));
    }

    public function products()
    {
        if(App::getLocale() == "vi"){
            $categories = [
                [
                    'id' => 1,
                    'name' => 'Thịt',
                    'image' => 'images/app/product/cat-01.jpg',
                    'products' => [
                        [
                            'id' => 1,
                            'name' => 'Ba chỉ bò Mỹ cắt lát tiêu chuẩn USDA CHOICE',
                            'description' => 'Ba chỉ bò là phần thịt được lấy từ phần bụng của con bò, với những dải thịt nạc và mỡ xen kẽ nhau nên có độ mềm, ngậy, ngọt nhưng hoàn toàn không ngấy. Ba chỉ bò Mỹ được bào mỏng theo tiêu chuẩn độ dày 1,5mm, đảm bảo độ mỏng cho việc chế biến món nướng, BBQ, chiên áp chảo hoặc dung với lẩu.</br>Bò Mỹ rất dễ chế biến. Những món ăn nấu từ thịt ba chỉ bò Mỹ cũng rất đơn giản như xào, lẩu, cuốn cải nướng, cuốn nấm kim châm nướng, nhúng giấm hay làm salad.',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 1,
                        ],
                        [
                            'id' => 2,
                            'name' => 'Bắp hoa bò Mỹ cắt lát tiêu chuẩn USDA CHOICE',
                            'description' => 'Bắp hoa bò là phần cơ thịt nhỏ, được lọc ra từ chân trước của con bò, chúng có rất nhiều đường gân và mô nối, thớ thịt săn chắc nhỏ mịn nên tương đối dai. <br> Lõi bắp hoa là phần cơ vận động nhiều của con bò, thớ thịt nhỏ mịn, săn chắc, lại có nhiều đường gần, mô nối nên tương đối dai, cần phải chọn cách chế biến phù hợp để món ăn được ngon và đậm đà.',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 1,
                        ],
                        [
                            'id' => 3,
                            'name' => 'Thăn nội bò Úc tiêu chuẩn HACCP',
                            'description' => 'Thịt thăn nội (tenderloin), còn gọi là thịt thăn hay fillet là phần mềm và ngon nhất của con bò được cắt ra từ phần lưng phía trong, đặc biệt là ở phần cuối thắt lưng. Phần lưng là nơi cung cấp những miếng thịt bò ngon nhất, được ưa chuộng vì đây là loại thịt mềm và nhiều nạc nhất. Chính vì vậy, nó cũng có giá đắt nhất. Một con bò chỉ có một miếng thăn nội bò, có trong lượng khoảng 1,8 đến 2,5 kg.',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 1,
                        ],
                    ]
                ],
                [
                    'id' => 2,
                    'name' => 'Rau',
                    'image' => 'images/app/product/cat-01.jpg',
                    'products' => [
                        [
                            'id' => 4,
                            'name' => 'Rau 1',
                            'description' => 'Miêu tả Rau 1',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 2,
                        ],
                        [
                            'id' => 5,
                            'name' => 'Rau 2',
                            'description' => 'Miêu tả Rau 2',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 2,
                        ],
                        [
                            'id' => 6,
                            'name' => 'Rau 3',
                            'description' => 'Miêu tả Rau 3',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 2,
                        ],
                    ]
                ],
                [
                    'id' => 3,
                    'name' => 'Thực Phẩm Công Nghệ',
                    'image' => 'images/app/product/cat-01.jpg',
                    'products' => [
                        [
                            'id' => 7,
                            'name' => 'Thực Phẩm Công Nghệ 1',
                            'description' => 'Miêu tả Thực phẩm công nghệ 1',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 3,
                        ],
                        [
                            'id' => 8,
                            'name' => 'Thực Phẩm Công Nghệ 2',
                            'description' => 'Miêu tả Thực phẩm công nghệ 2',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 3,
                        ],
                        [
                            'id' => 9,
                            'name' => 'Thực Phẩm Công Nghệ 3',
                            'description' => 'Miêu tả Thực phẩm công nghệ 3',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 3,
                        ],
                    ]
                ],
            ];
            $products = [];
            for ($i = 0 ; $i < count($categories); $i++) {
                for($z = 0 ; $z < count($categories[$i]['products']); $z++) {
                    array_push($products, $categories[$i]['products'][$z]);
                    // dd($categories[$i]['products'][$z+1]);
                }

            }
        }
        else{
            $categories = [
                [
                    'id' => 1,
                    'name' => 'Meat',
                    'image' => 'images/app/product/cat-01.jpg',
                    'products' => [
                        [
                            'id' => 1,
                            'name' => 'Only three US beef slices USDA CHOICE standard',
                            'description' => 'Only three cows are the meat taken from the abdomen of the cow, with strips of lean and fat meat alternating, so it has softness, sweetness, but not completely at all. Only three American cows are thinned according to the standard of 1.5mm thickness, ensuring the thinness for the processing of grilled dishes, BBQ, fried pan or served with hot pot. </br> American cows are easy to process. The dishes made from American bacon are also as simple as sautéing, hotpot, grilled mustard, grilled mushroom mushroom, dipping vinegar or making salad.',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 1,
                        ],
                        [
                            'id' => 2,
                            'name' => 'American beef flower cut into USDA CHOICE standard',
                            'description' => 'Beef flower corn is a small piece of muscle, filtered out from the front leg of the cow, they have a lot of tendons and connective tissue, small smooth muscle fibers so relatively tough. <br> Corn core core is the motor of many cows, small fibers are smooth, firm, there are many near lines, connective tissue should be relatively tough, need to choose suitable processing to be delicious food and bold.',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 1,
                        ],
                        [
                            'id' => 3,
                            'name' => 'HACCP Australian beef tenderloin',
                            'description' => 'Tenderloin, also known as tenderloin or fillet, is the best and softest part of a cow cut from the inner back, especially at the end of the waist. The back is the place that provides the best beef, which is popular because it is the most tender and lean meat. Therefore, it is also the most expensive. A cow has only one piece of beef tenderloin, ranging in size from 1.8 to 2.5 kg.',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 1,
                        ],
                    ]
                ],
                [
                    'id' => 2,
                    'name' => 'Vegetable',
                    'image' => 'images/app/product/cat-01.jpg',
                    'products' => [
                        [
                            'id' => 4,
                            'name' => 'Vegetable 1',
                            'description' => 'Vegetable Description 1',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 2,
                        ],
                        [
                            'id' => 5,
                            'name' => 'Vegetable 2',
                            'description' => 'Vegetable Description 2',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 2,
                        ],
                        [
                            'id' => 6,
                            'name' => 'Vegetable 3',
                            'description' => 'Vegetable Description 3',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 2,
                        ],
                    ]
                ],
                [
                    'id' => 3,
                    'name' => 'Food Technology',
                    'image' => 'images/app/product/cat-01.jpg',
                    'products' => [
                        [
                            'id' => 7,
                            'name' => 'Food Technology 1',
                            'description' => 'Food Technology Description 1',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 3,
                        ],
                        [
                            'id' => 8,
                            'name' => 'Food Technology 2',
                            'description' => 'Food Technology Description 2',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 3,
                        ],
                        [
                            'id' => 9,
                            'name' => 'Food Technology 3',
                            'description' => 'Food Technology Description 3',
                            'image' => 'images/app/product/01.jpg',
                            'category_id' => 3,
                        ],
                    ]
                ],
            ];
            $products = [];
            for ($i = 0 ; $i < count($categories); $i++) {
                for($z = 0 ; $z < count($categories[$i]['products']); $z++) {
                    array_push($products, $categories[$i]['products'][$z]);
                }

            }
        }
        return view("static.products", compact('categories', 'products'));
    }

    public function productDetail($id)
    {
        if(App::getLocale() == "vi"){
            $categories = [
                [
                    'id' => 1,
                    'name' => 'Thịt',
                    'image' => 'images/app/product/cat-01.jpg',
                    'products' => [
                        [
                            'id' => 1,
                            'name' => 'Ba chỉ bò Mỹ cắt lát tiêu chuẩn USDA CHOICE',
                            'description' => 'Ba chỉ bò là phần thịt được lấy từ phần bụng của con bò, với những dải thịt nạc và mỡ xen kẽ nhau nên có độ mềm, ngậy, ngọt nhưng hoàn toàn không ngấy. Ba chỉ bò Mỹ được bào mỏng theo tiêu chuẩn độ dày 1,5mm, đảm bảo độ mỏng cho việc chế biến món nướng, BBQ, chiên áp chảo hoặc dung với lẩu.</br>Bò Mỹ rất dễ chế biến. Những món ăn nấu từ thịt ba chỉ bò Mỹ cũng rất đơn giản như xào, lẩu, cuốn cải nướng, cuốn nấm kim châm nướng, nhúng giấm hay làm salad.',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 2,
                            'name' => 'Bắp hoa bò Mỹ cắt lát tiêu chuẩn USDA CHOICE',
                            'description' => 'Bắp hoa bò là phần cơ thịt nhỏ, được lọc ra từ chân trước của con bò, chúng có rất nhiều đường gân và mô nối, thớ thịt săn chắc nhỏ mịn nên tương đối dai. <br> Lõi bắp hoa là phần cơ vận động nhiều của con bò, thớ thịt nhỏ mịn, săn chắc, lại có nhiều đường gần, mô nối nên tương đối dai, cần phải chọn cách chế biến phù hợp để món ăn được ngon và đậm đà.',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 3,
                            'name' => 'Thăn nội bò Úc tiêu chuẩn HACCP',
                            'description' => 'Thịt thăn nội (tenderloin), còn gọi là thịt thăn hay fillet là phần mềm và ngon nhất của con bò được cắt ra từ phần lưng phía trong, đặc biệt là ở phần cuối thắt lưng. Phần lưng là nơi cung cấp những miếng thịt bò ngon nhất, được ưa chuộng vì đây là loại thịt mềm và nhiều nạc nhất. Chính vì vậy, nó cũng có giá đắt nhất. Một con bò chỉ có một miếng thăn nội bò, có trong lượng khoảng 1,8 đến 2,5 kg.',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 10,
                            'name' => 'Sườn cừu Úc cắt cọng tiêu chuẩn HACCP',
                            'description' => 'Thịt cừu hay thịt trừu là loại thịt thực phẩm từ cừu. Ở một số quốc gia, thịt cừu không những tốt cho sức khỏe mà được coi là món ăn mang lại sự may mắn và sung túc cho người được thưởng thức.',
                            'image' => 'images/app/product/01.jpg',
                        ],
                    ]
                ],
                [
                    'id' => 2,
                    'name' => 'Rau',
                    'image' => 'images/app/product/cat-01.jpg',
                    'products' => [
                        [
                            'id' => 4,
                            'name' => 'Rau 1',
                            'description' => 'Miêu tả Rau 1',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 5,
                            'name' => 'Rau 2',
                            'description' => 'Miêu tả Rau 2',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 6,
                            'name' => 'Rau 3',
                            'description' => 'Miêu tả Rau 3',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 11,
                            'name' => 'Rau 4',
                            'description' => 'Miêu tả Rau 4',
                            'image' => 'images/app/product/01.jpg',
                        ],
                    ]
                ],
                [
                    'id' => 3,
                    'name' => 'Thực Phẩm Công Nghệ',
                    'image' => 'images/app/product/cat-01.jpg',
                    'products' => [
                        [
                            'id' => 7,
                            'name' => 'Thực Phẩm Công Nghệ 1',
                            'description' => 'Miêu tả Thực phẩm công nghệ 1',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 8,
                            'name' => 'Thực Phẩm Công Nghệ 2',
                            'description' => 'Miêu tả Thực phẩm công nghệ 2',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 9,
                            'name' => 'Thực Phẩm Công Nghệ 3',
                            'description' => 'Miêu tả Thực phẩm công nghệ 3',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 12,
                            'name' => 'Thực Phẩm Công Nghệ 4',
                            'description' => 'Miêu tả Thực phẩm công nghệ 4',
                            'image' => 'images/app/product/01.jpg',
                        ],
                    ]
                ],
            ];
            $category = [];
            if($id){
                for ($i = 0; $i < count($categories); $i++) {
                    if($categories[$i]['id'] == $id){
                        $category = $categories[$i];
                    }
                }
            }
            else {
                return redirect('');
            }
        }
        else{
            $categories = [
                [
                    'id' => 1,
                    'name' => 'Meat',
                    'image' => 'images/app/product/cat-01.jpg',
                    'products' => [
                        [
                            'id' => 1,
                            'name' => 'Only three US beef slices USDA CHOICE standard',
                            'description' => 'Only three cows are the meat taken from the abdomen of the cow, with strips of lean and fat meat alternating, so it has softness, sweetness, but not completely at all. Only three American cows are thinned according to the standard of 1.5mm thickness, ensuring the thinness for the processing of grilled dishes, BBQ, fried pan or served with hot pot. </br> American cows are easy to process. The dishes made from American bacon are also as simple as sautéing, hotpot, grilled mustard, grilled mushroom mushroom, dipping vinegar or making salad.',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 2,
                            'name' => 'American beef flower cut into USDA CHOICE standard',
                            'description' => 'Beef flower corn is a small piece of muscle, filtered out from the front leg of the cow, they have a lot of tendons and connective tissue, small smooth muscle fibers so relatively tough. <br> Corn core core is the motor of many cows, small fibers are smooth, firm, there are many near lines, connective tissue should be relatively tough, need to choose suitable processing to be delicious food and bold.',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 3,
                            'name' => 'HACCP Australian beef tenderloin',
                            'description' => 'Tenderloin, also known as tenderloin or fillet, is the best and softest part of a cow cut from the inner back, especially at the end of the waist. The back is the place that provides the best beef, which is popular because it is the most tender and lean meat. Therefore, it is also the most expensive. A cow has only one piece of beef tenderloin, ranging in size from 1.8 to 2.5 kg.',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 10,
                            'name' => 'Australian lamb chops cut the HACCP standard',
                            'description' => 'Lamb or lamb meat is a kind of meat from sheep. In some countries, lamb is not only good for health but is considered a food that brings good luck and prosperity to those who enjoy it.',
                            'image' => 'images/app/product/01.jpg',
                        ],
                    ]
                ],
                [
                    'id' => 2,
                    'name' => 'Vegetable',
                    'image' => 'images/app/product/cat-01.jpg',
                    'products' => [
                        [
                            'id' => 4,
                            'name' => 'Vegetable 1',
                            'description' => 'Vegetable Description 1',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 5,
                            'name' => 'Vegetable 2',
                            'description' => 'Vegetable Description 2',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 6,
                            'name' => 'Vegetable 3',
                            'description' => 'Vegetable Description 3',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 11,
                            'name' => 'Vegetable 4',
                            'description' => 'Vegetable Description 4',
                            'image' => 'images/app/product/01.jpg',
                        ],
                    ]
                ],
                [
                    'id' => 3,
                    'name' => 'Food Technology',
                    'image' => 'images/app/product/cat-01.jpg',
                    'products' => [
                        [
                            'id' => 7,
                            'name' => 'Food Technology 1',
                            'description' => 'Food Technology Description 1',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 8,
                            'name' => 'Food Technology 2',
                            'description' => 'Food Technology Description 2',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 9,
                            'name' => 'Food Technology 3',
                            'description' => 'Food Technology Description 3',
                            'image' => 'images/app/product/01.jpg',
                        ],
                        [
                            'id' => 12,
                            'name' => 'Food Technology 4',
                            'description' => 'Food Technology Description 4',
                            'image' => 'images/app/product/01.jpg',
                        ],
                    ]
                ],
            ];
            $category = [];
            if($id){
                for ($i = 0; $i < count($categories); $i++) {
                    if($categories[$i]['id'] == $id){
                        $category = $categories[$i];
                    }
                }
            }
            else {
                return redirect('');
            }
        }

        return view("static.product_detail", compact('category'));
    }

}
