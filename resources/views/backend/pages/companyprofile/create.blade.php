
@extends('backend.layouts.master')

@section('title')
Admin Create - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
   .container{
    position: relative;
    /* max-width: 900px; */
    width: 100%;
    /* border-radius: 6px; */
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    /* box-shadow: 0 5px 10px rgba(0,0,0,0.1); */
}
.container header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}
.container header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #4070f4;
}
.container form{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;
    overflow: hidden;
}
.container form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}

.container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: -10px;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
    
}
/* .nextBtn {
    position: absolute;
    top: 416px;
    left: 630px; 
} */

span,label{
    font-weight: bold;
}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}

.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field select,
.input-field input[type="date"]{
    color: #707070;
}
.input-field input[type="date"]:valid{
    color: #333;
}
.container form button, {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #4070f4;
    transition: all 0.3s linear;
    cursor: pointer;
}

.container form .btnText{
    font-size: 14px;
    font-weight: 400;
}
form .buttons button{
    background-color: #082881;
    color: white;
}
form .buttons{
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
}
form .buttons button {
    margin-right: 14px;
    margin-top:3px; 
    width: 119px;
    border: 1px solid black;
    height: 5vh;
    background: #265df2;
    color: white;
}
textarea{
    width: 1060px;
    height: 10vh;
    margin-bottom: 10px; 
}

@media (max-width: 750px) {
    .container form{
        overflow-y: scroll;
    }
    .container form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
   
    
    .buttons{
        justify-content: center;
    }
}

@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
    
}
</style>
@endsection


@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Admin Create</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.admins.index') }}">All Admins</a></li>
                    <li><span>Create Admin</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.layouts.partials.logout')
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Company Profile</h4>
                    @include('backend.layouts.partials.messages')  
                    <div class="container">
                        <form action="#">
                            {{-- <div class="form first"> --}}
                                <div class="details personal">
                                    
                                    <div class="fields">
                                        <div class="input-field">
                                            <label>Company Website</label>
                                            <input type="text" placeholder="Complete website link">
                                        </div>
                                        <div class="input-field">
                                            <label>Company Name</label>
                                            <input type="text" placeholder="Full Name of company">
                                        </div>
                                        <div class="input-field">
                                            <label>Company Short Name</label>
                                            <input type="text" placeholder="Short Name of company">
                                        </div>
                                        <div class="input-field">
                                            <label>Company Email</label>
                                            <input type="email" placeholder="Enter Compani email">
                                        </div>
                                        <div class="input-field">
                                            <label>Mobile Number</label>
                                            <input
                                                type="tel"
                                                placeholder="Enter mobile number"
                                                minlength="10"
                                                maxlength="10"
                                            >
                                        </div>
                                        <div class="input-field">
                                            <label>Land-line Number</label>
                                            <input
                                                type="tel"
                                                placeholder="Enter mobile number"
                                                minlength="10"
                                                maxlength="10"
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="details ID">
                                    <span class="title">Company Details</span>
                                    <div class="fields">
                                        <div class="input-field">
                                            <label for="">Hospital State</label>
                                            <select name="slct1" id="slct1" onchange="populate(this.id,'slct2')">
                                                <option value=">-- select country --" disabled selected>Select State</option>
                                                <option>Andaman and Nicobar</option>
                                                <option>Andhra Pradesh</option>
                                                <option>Arunachal Pradesh</option>
                                                <option>Assam</option>
                                                <option>Bihar</option>
                                                <option>Chhattisgarh</option>
                                                <option>Dadra and Nagar Haveli</option>
                                                <option>Daman and Diu</option>
                                                <option>Delhi</option>
                                                <option>Goa</option>
                                                <option>Gujarat</option>
                                                <option>Haryana</option>
                                                <option>Himachal Pradesh</option>
                                                <option>Jammu and Kashmir</option>
                                                <option>Jharkhand</option>
                                                <option>Karnataka</option>
                                                <option>Kerala</option>
                                                <option>Ladakh</option>
                                                <option>Lakshadweep</option>
                                                <option>Madhya Pradesh</option>
                                                <option>Maharashtra</option>
                                                <option>Manipur</option>
                                                <option>Meghalaya</option>
                                                <option>Mizoram</option>
                                                <option>Nagaland</option>
                                                <option>Odisha</option>
                                                <option>Puducherry</option>
                                                <option>Punjab</option>
                                                <option>Rajasthan</option>
                                                <option>Sikkim</option>
                                                <option>Tamil Nadu</option>
                                                <option>Telangana</option>
                                                <option>Tripura</option>
                                                <option>Uttar Pradesh</option>
                                                <option>Uttarakhand</option>
                                                <option>West Bengal</option>
                                            </select>
                                        </div>
                                        <div class="input-field">
                                            <label for="">Hospital District</label>
                                            <select name="slct2" id="slct2"></select>
                                        </div>
                                        <div class="input-field">
                                            <label>Pin</label>
                                            <input
                                                type="text"
                                                placeholder="6 digit pin"
                                                maxlength="6"
                                                minlength="6"
                                            >
                                        </div>
                                        <div class="input-field">
                                            <label>City</label>
                                            <input type="text" placeholder="Enter Building name">
                                        </div>
                                        <div class="input-field">
                                            <label>Country</label>
                                            <input type="tel" placeholder="Enter Floor Number">
                                        </div>
                                        <div class="input-field">
                                            <label>Office Premesis details</label>
                                            <input type="tel" placeholder="Building,Floor,Unit/Room Number">
                                        </div>
                                    </div>
                                    <div class="details address">
                                        <span class="title">Business Details</span>
                                        <div class="fields">
                                            <div class="input-field">
                                                <label>Category</label>
                                                <select name="" id="">
                                                    <option>Category1</option>
                                                    <option>Category2</option>
                                                    <option>Category3</option>
                                                    <option>Category4</option>
                                                </select>
                                            </div>
                                            <div class="input-field">
                                                <label>Company Class</label>
                                                <select name="" id="">
                                                    <option>class1</option>
                                                    <option>class2</option>
                                                    <option>class3</option>
                                                    <option>class4</option>
                                                </select>
                                            </div>
                                            <div class="input-field">
                                                <label>CIN Number</label>
                                                <input type="tel" placeholder="Enter Company Cin Number state">
                                            </div>
                                            <div class="input-field">
                                                <label>Pan</label>
                                                <input type="tel" placeholder="Enter Pan NUmber">
                                            </div>
                                            <div class="input-field">
                                                <label>TAN Number</label>
                                                <input type="number" placeholder="Enter TAN Number">
                                            </div>
                                            <div class="input-field">
                                                <label>GST Number</label>
                                                <input type="number" placeholder="Enter GST number">
                                            </div>
                                            <div class="input-field">
                                                <label>Incorporation Date</label>
                                                <input type="date" placeholder="Company Incorporation Date">
                                            </div>
                                            <div class="input-field">
                                                <label>Incorporation State</label>
                                                <input type="text" placeholder="Company Incorporation Stste">
                                            </div>
                                            <div class="input-field">
                                                <label>Incorporation Country</label>
                                                <input type="text" placeholder="Company Incorporation Country">
                                            </div>
                                            <div class="input-field">
                                                <label>About Company</label>
                                               <textarea name="about" "></textarea>
                                            </div>
                                        </div>
                                        <div class="buttons">
                                            <button class="sumbit">
                                                <span class="btnText">Submit</span>
                                                <i class="uil uil-navigator"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </form>
                    </div>             
        <!-- data table end -->
    </div>
    
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    })

// state based dist selection
function populate(s1,s2)
        {
            var s1=document.getElementById(s1);
            var s2=document.getElementById(s2);
            s2.innerHTML= "";
            if(s1.value == "Andaman and Nicobar")
            {
                var optionArray = ['select district|Select District','Nicobar|Nicobar','North and Middle Andaman|North and Middle Andaman','South Andaman|South Andaman'];
            }
            else if(s1.value == "Andhra Pradesh")
            {
                var optionArray = ['Select district|Select District','alluri sitharama raju|Alluri Sitharama Raju','anakapalli|Anakapalli','ananthapuramu|Ananthapuramu','annamayya|Annamayya','bapatla|Bapatla','chittoor|Chittoor','dr. b.r. ambedkar konaseema|Dr. B.R. Ambedkar Konaseema','east godavari|East Godavari','eluru|Eluru','guntur|Guntur','kakinada|Kakinada','krishna|Krishna','kurnool|Kurnool','nandyal|Nandyal','ntr|NTR',
                'palnadu|Palnadu','parvathipuram manyam|Parvathipuram Manyam','prakasam|Prakasam','sri potti sriramulu nellore|Sri Potti Sriramulu Nellore','sri sathya sai|Sri Sathya Sai','srikakulam|Srikakulam','tirupati|Tirupati','visakhapatnam|Visakhapatnam','vizianagaram|Vizianagaram','west godavari|West Godavari','ysr|YSR'];
            }
            else if(s1.value == "Arunachal Pradesh")
            {
                var optionArray = ['select district|Select District','anjaw|Anjaw','changlang|Changlang','east kameng|East Kameng','east siang|East Siang','itanagar capital complex|Itanagar capital complex','kamle|Kamle','kra daadi|Kra Daadi','kurung kumey|Kurung Kumey','Lepa rada|Lepa Rada	','lohit|Lohit','longding|Longding','lower dibang valley|Lower Dibang Valley','lower siang|lower siang','lower subansiri|Lower Subansiri',
                'namsai|Namsai','pakke-kessang|Pakke-Kessang','papum pare|Papum Pare','shi yomi|Shi Yomi','siang|Siang','tawang|Tawang','tirap|Tirap','upper dibang valley|Upper Dibang Valley','upper siang|Upper Siang','upper subansiri|Upper Subansiri','west kameng|West Kameng','west siang|West Siang'];
            }
            else if(s1.value == "Assam")
            {
                var optionArray = ['select district|Select District','bajali|Bajali','baksa|Baksa','barpeta|Barpeta','biswanath|Biswanath','bongaigaon|Bongaigaon','cachar|Cachar','charaideo|Charaideo','chirang|Chirang','darrang|Darrang','dhemaji|Dhemaji','Dhubri|Dhubri','dibrugarh|Dibrugarh','dima hasao|Dima Hasao','golaghat|Golaghat','hailakandi|Hailakandi','hojai|Hojai','jorhat|Jorhat','kamrup|Kamrup','kamrup metropolitan|Kamrup Metropolitan',
                'karbi anglong|Karbi Anglong','karimganj|Karimganj','kokrajhar|Kokrajhar','lakhimpur|Lakhimpur','majuli|Majuli','morigaon|Morigaon','nagaon|Nagaon','nalbari|Nalbari','sivasagar|Sivasagar','south salmara mankachar|South Salmara Mankachar','sonitpur|Sonitpur','tamulpur|Tamulpur','tinsukia|Tinsukia','udalguri|Udalguri','west karbi anglong|West Karbi Anglong'];
            }
            else if(s1.value == "Bihar")
            {
                var optionArray = ['select district|Select District','araria|Araria','arwal|Arwal','aurangabad|Aurangabad','banka|Banka','begusarai|Begusarai','bhagalpur|Bhagalpur','bhojpur|Bhojpur','buxar|Buxar','darbhanga|Darbhanga','east champaran|East Champaran','gaya|Gaya','gopalganj|Gopalganj','jamui|Jamui','jehanabad|Jehanabad','kaimur|Kaimur','katihar|Katihar','khagaria|Khagaria','kishanganj|Kishanganj','lakhisarai|Lakhisarai','madhepura|Madhepura',
                'madhubani|Madhubani','munger|Munger','muzaffarpur|Muzaffarpur','nalanda|Nalanda','nawada|Nawada','patna|Patna','purnia|Purnia','rohtas|Rohtas','saharsa|Saharsa','samastipur|Samastipur','saran|Saran','sheikhpura|Sheikhpura','sheohar|Sheohar','sitamarhi|Sitamarhi','siwan|Siwan','supaul|Supaul','vaishali|Vaishali','west champaran|West Champaran'];
            }
            else if(s1.value == "Chhattisgarh")
            {
                var optionArray = ['select district|Select District','balod|Balod','baloda bazar|Baloda Bazar','balrampur-ramanujganj|Balrampur-Ramanujganj','bastar|Bastar','bemetara|Bemetara','bijapur|Bijapur','bilaspur|Bilaspur','dantewada|Dantewada','dhamtari|Dhamtari','durg|Durg','gariaband|Gariaband','gaurela-pendra-marwahi|Gaurela-Pendra-Marwahi','janjgir-champa|Janjgir-Champa','jashpur|Jashpur','kabirdham|Kabirdham','kanker|Kanker','khairagarh-chhuikhadan-gandai|Khairagarh-Chhuikhadan-Gandai',
                'kondagaon|Kondagaon','korba|Korba','korea|Korea','mahasamund|Mahasamund','manendragarh-chirmiri-bharatpur|Manendragarh-Chirmiri-Bharatpur','mohla-manpur-ambagarh chowki|Mohla-Manpur-Ambagarh Chowki','mungeli|Mungeli','narayanpur|Narayanpur','raigarh|Raigarh','raipur|Raipur','rajnandgaon|Rajnandgaon','sarangarh-bilaigarh|Sarangarh-Bilaigarh','shakti|Shakti','sukma|Sukma','surajpur|Surajpur','	surguja|Surguja'];
            }
            else if(s1.value == "Dadra and Nagar Haveli")
            {
                var optionArray = ['select district|Select District','Dadra and Nagar Haveli|Dadra and Nagar Haveli'];
            }
            else if(s1.value == "Daman and Diu")
            {
                var optionArray = ['select district|Select District','Daman|Daman','Diu|Diu'];
            }
            else if(s1.value == "Delhi ")
            {
                var optionArray = ['select district|Select District','Central Delhi|Central Delhi','East Delhi|East Delhi','New Delhi|New Delhi','North Delhi|North Delhi','North East Delhi|North East Delhi','North West Delhi|North West Delhi','Shahdara district|Shahdara district','South Delhi|South Delhi','South East Delhi|South East Delhi','South West Delhi|South West Delhi','West Delhi|West Delhi'];
            }
            else if(s1.value == "Goa")
            {
                var optionArray = ['select district|Select District','north goa|Nouth Goa','south goa|South Goa'];
            }
            else if(s1.value == "Gujarat")
            {
                var optionArray = ['select district|Select District','ahmedabad|Ahmedabad','amreli|Amreli','anand|Anand','aravalli|Aravalli','banaskantha|Banaskantha','bharuch|Bharuch','bhavnagar|Bhavnagar','botad|Botad','chhota udaipur|Chhota Udaipur','dahod|Dahod','dang|Dang','devbhumi dwarka|Devbhumi Dwarka','gandhinagar|Gandhinagar','gir somnath|Gir Somnath','jamnagar|Jamnagar','junagadh|Junagadh','kheda|Kheda','kutch|Kutch','mahisagar|Mahisagar','mehsana|Mehsana','morbi|Morbi','narmada|Narmada',
                'navsari|Navsari','panchmahal|Panchmahal','patan|Patan','porbandar|Porbandar','rajkot|Rajkot','sabarkantha|Sabarkantha','surat|Surat','surendranagar|Surendranagar','tapi|Tapi','vadodara|Vadodara','valsad|Valsad'];
            }
            else if(s1.value == "Haryana")
            {
                var optionArray = ['select district|Select District','ambala|Ambala','bhiwani|Bhiwani','charkhi dadri|Charkhi Dadri','faridabad|Faridabad','fatehabad|Fatehabad','gurugram|Gurugram','hisar|Hisar','jhajjar|Jhajjar','jind|Jind','kaithal|Kaithal','karnal|Karnal','kurukshetra|Kurukshetra','mahendragarh|Mahendragarh','nuh|Nuh','palwal|Palwal','panchkula|Panchkula','panipat|Panipat','rewari|Rewari','rohtak|Rohtak','sirsa|Sirsa','sonipat|Sonipat','Yamunanagar|Yamunanagar'];
            }
            else if(s1.value == "Himachal Pradesh")
            {
                var optionArray = ['select district|Select District','bilaspur|Bilaspur','chamba|Chamba','hamirpur|Hamirpur','kangra|Kangra','kinnaur|Kinnaur','|','kullu|Kullu','lahaul and spiti|Lahaul and Spiti','mandi|Mandi','shimla|Shimla','sirmaur|Sirmaur','solan|Solan','una|Una'];
            }
            else if(s1.value == "Jammu and Kashmir")
            {
                var optionArray = ['select district|Select District','Anantnag|Anantnag','Budgam|Budgam','Bandipore|Bandipore','Baramulla|Baramulla','Doda|Doda','Ganderbal|Ganderbal','Jammu|Jammu','Kathua|Kathua','Kishtwar|Kishtwar','Kulgam|Kulgam','Kupwara|Kupwara','Poonch|Poonch','Pulwama|Pulwama','Pulwama|Pulwama','Rajouri|Rajouri','Ramban|Ramban','Reasi|Reasi','Samba|Samba','Shopian|Shopian','Srinagar|Srinagar','Udhampur|Udhampur'];
            }
            else if(s1.value == "Jharkhand")
            {
                var optionArray = ['select district|Select District','bokaro|Bokaro','chatra|Chatra','deoghar|Deoghar','dhanbad|Dhanbad','dumka|Dumka','east singhbhum|East Singhbhum','garhwa|Garhwa','giridih|Giridih','godda|Godda','gumla|Gumla','hazaribag|Hazaribag','jamtara|Jamtara','khunti|Khunti','koderma|Koderma','latehar|Latehar','lohardaga|Lohardaga','pakur|Pakur','palamu|Palamu','ramgarh|Ramgarh','ranchi|Ranchi','sahibganj|Sahibganj','seraikela-kharsawan|Seraikela-Kharsawan','simdega|Simdega',
                'west singhbhum|West Singhbhum'];
            }
            else if(s1.value == "Karnataka")
            {
                var optionArray = ['select district|Select District','Bagalakote|Bagalakote','Ballari|Ballari','Belagavi|Belagavi','Bengaluru Rural|Bengaluru Rural','Bengaluru Urban|Bengaluru Urban','Bidar|Bidar','Chamarajanagara|Chamarajanagara','Chikkaballapura|Chikkaballapura','Chikkamagaluru|Chikkamagaluru','Chitradurga|Chitradurga','Dakshina Kannada|Dakshina Kannada','Davanagere|Davanagere','Dharwada|Dharwada','Gadaga|Gadaga','Kalaburagi|Kalaburagi','Hassan|Hassan','Haveri|Haveri','Kodagu|Kodagu',
                'Kolar|Kolar','	Koppala|Koppala','Mandya|Mandya','Mysuru|Mysuru','Raichuru|Raichuru','Ramanagara|Ramanagara','Shivamogga|Shivamogga','Tumakuru|Tumakuru','Udupi|Udupi','Uttara Kannada|Uttara Kannada','Vijayanagara|Vijayanagara','Vijayapura|Vijayapura','Yadgiri|Yadgiri'];
            }
            else if(s1.value == "Kerala")
            {
                var optionArray = ['select district|Select District','Alappuzha|Alappuzha','Ernakulam|Ernakulam','Idukki|Idukki','Kannur|Kannur','Kasaragod|Kasaragod','Kollam|	Kollam','Kottayam|Kottayam','Kozhikode|Kozhikode','Malappuram|Malappuram','	Palakkad|Palakkad','Pathanamthitta|Pathanamthitta','Thiruvananthapuram|Thiruvananthapuram','Thrissur|Thrissur','Wayanad|Wayanad'];
            }
             else if(s1.value == "Ladakh")
            {
                var optionArray = ['select district|Select District','Kargil|Kargil','Leh|Leh'];
            }
            else if(s1.value == "Lakshadweep")
            {
                var optionArray = ['select district|Select District','Lakshadweep|Lakshadweep'];
            }
            else if(s1.value == "Madhya Pradesh")
            {
                var optionArray = ['select district|Select District','Agar Malwa|Agar Malwa','Alirajpur|Alirajpur','Anuppur|Anuppur','Ashoknagar|Ashoknagar','Balaghat|Balaghat','Barwani|Barwani','Betul|Betul','Bhind|Bhind','Bhopal|Bhopal','Burhanpur|Burhanpur','Chhatarpur|Chhatarpur','Chhindwara|Chhindwara','Damoh|Damoh','Datia|Datia','Dewas|Dewas','Dhar|Dhar','Dindori|Dindori','	Guna|Guna','Gwalior|Gwalior','Harda|Harda','Hoshangabad|Hoshangabad','Indore|Indore','Jabalpur|Jabalpur','Jhabua|Jhabua','Katni|Katni',
                'Khandwa (East Nimar)|Khandwa (East Nimar)','Khargone (West Nimar)|Khargone (West Nimar)','Mandla|Mandla','Mandsaur|Mandsaur','Mandsaur|Mandsaur','Narsinghpur|Narsinghpur','Neemuch|Neemuch','Niwari|Niwari','Panna|Panna','Raisen|Raisen','Rajgarh|Rajgarh','Ratlam|Ratlam','Rewa|Rewa','Sagar|Sagar','Satna|Satna','Sehore|Sehore','Seoni|Seoni','Shahdol|Shahdol','Shajapur|Shajapur','Sheopur|Sheopur','Shivpuri|Shivpuri','Sidhi|Sidhi','Singrauli|Singrauli','Tikamgarh|Tikamgarh','	Ujjain|Ujjain','Umaria|Umaria','Vidisha|Vidisha'];
            }
            else if(s1.value == "Maharashtra")
            {
                var optionArray = ['select district|Select District','Ahmednagar|Ahmednagar','Akola|Akola','Amravati|Amravati','Beed|Beed','Bhandara|Bhandara','Buldhana|Buldhana','Chandrapur|Chandrapur','Osmanabad|Osmanabad','Dhule|Dhule','Gadchiroli|Gadchiroli','Gondia|Gondia','Hingoli|Hingoli','Jalgaon|Jalgaon','Jalna|Jalna','Kolhapur|Kolhapur','Latur|Latur','Mumbai City|Mumbai City','Mumbai Suburban|Mumbai Suburban','Nanded|Nanded','Nandurbar|Nandurbar','Nagpur|Nagpur','Nashik|Nashik','Palghar|Palghar','Parbhani|Parbhani',
                'Pune|Pune','Raigad|Raigad','Ratnagiri|Ratnagiri','Aurangabad|Aurangabad','Sangli|Sangli','Satara|Satara','Sindhudurg|Sindhudurg','Solapur|Solapur','Thane|Thane','Wardha|Wardha','Washim|Washim','Yavatmal|Yavatmal'];
            }
            else if(s1.value == "Manipur")
            {
                var optionArray = ['select district|Select District','Bishnupur|Bishnupur','Chandel|Chandel','Churachandpur|Churachandpur','Imphal East|Imphal East','Imphal West|Imphal West','Jiribam|Jiribam','Kakching|Kakching','Kamjong|Kamjong','|','Kangpokpi|Kangpokpi','Noney|Noney','Pherzawl|Pherzawl','Senapati|Senapati','Tamenglong|Tamenglong','Tengnoupal|Tengnoupal','Thoubal|Thoubal','Ukhrul|Ukhrul'];
            }
            else if(s1.value == "Meghalaya")
            {
                var optionArray = ['select district|Select District','East Garo Hills|East Garo Hills','East Khasi Hills|East Khasi Hills','East Jaintia Hills|East Jaintia Hills','Eastern West Khasi Hills|Eastern West Khasi Hills','North Garo Hills|North Garo Hills','Ri Bhoi|Ri Bhoi','South Garo Hills|South Garo Hills','South West Garo Hills|South West Garo Hills','South West Khasi Hills|South West Khasi Hills','West Garo Hills|West Garo Hills','West Jaintia Hills|West Jaintia Hills','West Khasi Hills|West Khasi Hills'];
            }
            else if(s1.value == "Mizoram")
            {
                var optionArray = ['select district|Select District','Aizawl|Aizawl','Champhai|Champhai','Hnahthial|Hnahthial','|','Khawzawl|Khawzawl','Kolasib|Kolasib','Lawngtlai|Lawngtlai','Lunglei|Lunglei','Mamit|Mamit','Saiha|Saiha','Saiha|Saiha','Serchhip|Serchhip'];
            }
            else if(s1.value == "Nagaland")
            {
                var optionArray = ['select district|Select District','Chümoukedima|Chümoukedima','Dimapur|Dimapur','Kiphire|Kiphire','Longleng|Longleng','Mokokchung|Mokokchung','Mon|Mon','Niuland|Niuland','Noklak|Noklak','Peren|Peren','Phek|Phek','Shamator|Shamator','Tseminyü|Tseminyü','Tuensang|Tuensang','Wokha|Wokha','Zunheboto|Zunheboto'];
            }
            else if(s1.value == "Odisha")
            {
                var optionArray = ['select district|Select District','Angul|Angul','Boudh (Bauda)|Boudh (Bauda)','Bhadrak|Bhadrak','Balangir|Balangir','Bargarh (Baragarh)|Bargarh (Baragarh)','Balasore|Balasore','Cuttack|Cuttack','Debagarh (Deogarh)|Debagarh (Deogarh)','Dhenkanal|Dhenkanal','Ganjam|Ganjam','Gajapati|Gajapati','Jharsuguda|Jharsuguda','Jajpur|Jajpur','Jagatsinghpur|Jagatsinghpur','Khordha|Khordha','Kendujhar|Kendujhar','Kalahandi|Kalahandi','Kandhamal|Kandhamal','Koraput|Koraput','Kendrapara|Kendrapara','Malkangiri|Malkangiri',
                'Mayurbhanj|Mayurbhanj','Nabarangpur|Nabarangpur','Nuapada|Nuapada','Nayagarh|Nayagarh','Puri|Puri','Rayagada|Rayagada','Sambalpur|Sambalpur','Subarnapur (Sonepur)|Subarnapur (Sonepur)','Sundargarh|Sundargarh',];
            }
            else if(s1.value == "Puducherry")
            {
                var optionArray = ['select district|Select District','Karaikal|Karaikal','Mahé|Mahé','Puducherry|Puducherry','Yanam|Yanam'];
            }
            else if(s1.value == "Punjab")
            {
                var optionArray = ['select district|Select District','amritsar|Amritsar','barnala|Barnala','bathinda|Bathinda','firozpur|Firozpur','faridkot|Faridkot','fatehgarh sahib|Fatehgarh Sahib','fazilka|Fazilka','gurdaspur|Gurdaspur','hoshiarpur|Hoshiarpur',
                'jalandhar|Jalandhar','kapurthala|Kapurthala','ludhiana|Ludhiana','malerkotla|Malerkotla','mansa|Mansa','moga|Moga','sri muktsar sahib|Sri Muktsar Sahib','pathankot|Pathankot','patiala|Patiala','rupnagar|Rupnagar','sahibzada ajit singh nagar|Sahibzada Ajit Singh Nagar','sangrur|Sangrur','shahid bhagat singh nagar|Shahid Bhagat Singh Nagar','tarn taran|Tarn Taran'];
            }
            else if(s1.value == "Rajasthan")
            {
                var optionArray = ['select district|Select District','Ajmer|Ajmer','Alwar|Alwar','Bikaner|Bikaner','Barmer|Barmer','Banswara|Banswara','Bharatpur|Bharatpur','Baran|Baran','Bundi|Bundi','Bhilwara|Bhilwara','Churu|Churu','Chittorgarh|Chittorgarh','Dausa|Dausa','Dholpur|Dholpur','Dungarpur|Dungarpur','Sri Ganganagar|Sri Ganganagar','Hanumangarh|Hanumangarh','Jhunjhunu|Jhunjhunu','Jalore|Jalore','Jodhpur|Jodhpur','Jaipur|Jaipur','Jaisalmer|Jaisalmer','Jhalawar|Jhalawar','Karauli|Karauli','Kota|Kota','Nagaur|Nagaur','Pali|Pali',
                'Pratapgarh|Pratapgarh','Rajsamand|Rajsamand','Sikar|Sikar','Sawai Madhopur|Sawai Madhopur','Sirohi|Sirohi','Tonk|Tonk','Udaipur|Udaipur'];
            }
            else if(s1.value == "Sikkim")
            {
                var optionArray = ['select district|Select District','east sikkim|East Sikkim','north sikkim|North Sikkim','pakyong|Pakyong','soreng|Soreng','south sikkim|South Sikkim','west sikkim|West Sikkim'];
            }
            else if(s1.value == "Tamil Nadu")
            {
                var optionArray = ['select district|Select District','Ariyalur|Ariyalur','Chengalpattu|Chengalpattu','Chennai|Chennai','Coimbatore|Coimbatore','Cuddalore|Cuddalore','Dharmapuri|Dharmapuri','Dindigul|Dindigul','Erode|Erode','Kallakurichi|Kallakurichi','Kanchipuram|Kanchipuram','Kanyakumari|Kanyakumari','Karur|Karur','Krishnagiri|Krishnagiri','Madurai|Madurai','Mayiladuthurai|Mayiladuthurai','Nagapattinam|Nagapattinam','Nilgiris|Nilgiris','Namakkal|Namakkal','Perambalur|Perambalur',
                'Pudukkottai|Pudukkottai','Ramanathapuram|Ramanathapuram','Ranipet|Ranipet','Salem|Salem','Sivaganga|Sivaganga','Tenkasi|Tenkasi','Tiruppur|Tiruppur','Tiruchirappalli|Tiruchirappalli','Theni|Theni','Tirunelveli|Tirunelveli','Thanjavur|Thanjavur','Thoothukudi|Thoothukudi','Tirupattur|Tirupattur','Tiruvallur|Tiruvallur','Tiruvarur|Tiruvarur','	Tiruvannamalai|Tiruvannamalai','Vellore|Vellore','Viluppuram|Viluppuram','Virudhunagar|Virudhunagar'];
            }
            else if(s1.value == "Telangana")
            {
                var optionArray = ['select district|Select District','Adilabad|Adilabad','Bhadradri Kothagudem|Bhadradri Kothagudem','Hanamkonda|Hanamkonda','Hyderabad|Hyderabad','Jagtial|Jagtial','Jangaon|Jangaon','Jayashankar Bhupalpally|Jayashankar Bhupalpally','Jogulamba Gadwal|Jogulamba Gadwal','Kamareddy|Kamareddy','Karimnagar|Karimnagar','Khammam|Khammam','Kumuram Bheem Asifabad|Kumuram Bheem Asifabad','Mahabubabad|Mahabubabad','Mahbubnagar|Mahbubnagar','Mancherial|Mancherial','Medak|Medak',
                'Medchal Malkajgiri|Medchal Malkajgiri','Mulugu|Mulugu','Nalgonda|Nalgonda','Narayanpet|Narayanpet','Nagarkurnool|Nagarkurnool','Nirmal|Nirmal','Nizamabad|Nizamabad','Peddapalli|Peddapalli','Rajanna Sircilla|Rajanna Sircilla','Ranga Reddy|Ranga Reddy','Sangareddy|Sangareddy','Siddipet|Siddipet','Suryapet|Suryapet','Vikarabad|Vikarabad','	Wanaparthy|Wanaparthy','Warangal|Warangal','Yadadri Bhuvanagiri|Yadadri Bhuvanagiri'];
            }
            else if(s1.value == "Tripura")
            {
                var optionArray = ['select district|Select District','dhalai|Dhalai','gomati|Gomati','khowai|Khowai','north tripura|North Tripura','sepahijala|Sepahijala','south tripura|South Tripura	','unakoti|Unakoti','west tripura|West Tripura'];
            }
            else if(s1.value == "Uttar Pradesh")
            {
                var optionArray = ['select district|Select District','Agra|Agra','Aligarh|Aligarh','Ambedkar Nagar|Ambedkar Nagar','Amethi|Amethi','Amroha|Amroha','Auraiya|Auraiya','Ayodhya|Ayodhya','Azamgarh|Azamgarh','Bagpat|Bagpat','Bahraich|Bahraich','Ballia|Ballia','Balrampur|Balrampur','Banda|Banda','Barabanki|Barabanki','Bareilly|Bareilly','Basti|Basti','Bhadohi|Bhadohi','Bijnor|Bijnor','Budaun|Budaun','Bulandshahr|Bulandshahr','Chandauli|Chandauli','Chitrakoot|Chitrakoot','Deoria|Deoria','Etah|Etah','Etawah|Etawah','Farrukhabad|Farrukhabad','Fatehpur|Fatehpur',
                'Firozabad|Firozabad','	Gautam Buddha Nagar|Gautam Buddha Nagar','Ghaziabad|Ghaziabad','Ghazipur|Ghazipur','Gonda|Gonda','Gorakhpur|Gorakhpur','Hamirpur|Hamirpur','Hapur|Hapur','Hardoi|Hardoi','Hathras|Hathras','Jalaun|Jalaun','Jaunpur|Jaunpur','Jhansi|Jhansi','Kannauj|Kannauj','Kanpur Dehat|Kanpur Dehat','Kanpur Nagar|Kanpur Nagar','Kasganj|Kasganj','Kaushambi|Kaushambi','Kushinagar|Kushinagar','Lakhimpur Kheri|Lakhimpur Kheri','Lalitpur|Lalitpur','Lucknow|Lucknow','Maharajganj|Maharajganj',
                'Mahoba|Mahoba','Mainpuri|Mainpuri','Mathura|Mathura','Mau|Mau','Meerut|Meerut','Mirzapur|Mirzapur','Moradabad|Moradabad','Muzaffarnagar|Muzaffarnagar','Pilibhit|Pilibhit','Pratapgarh|Pratapgarh','Prayagraj|Prayagraj','Raebareli|Raebareli','Rampur|Rampur','Saharanpur|Saharanpur','Sambhal|Sambhal','Sant Kabir Nagar|Sant Kabir Nagar','Shahjahanpur|Shahjahanpur','Shamli|Shamli','Shravasti|Shravasti','Siddharthnagar|Siddharthnagar','Sitapur|Sitapur','Sonbhadra|Sonbhadra','Sultanpur|Sultanpur','Unnao|Unnao','Varanasi|Varanasi'];
            }
            else if(s1.value == "Uttarakhand")
            {
                var optionArray = ['select district|Select District','almora|Almora','bageshwar|Bageshwar','chamoli|Chamoli','champawat|Champawat','dehradun|Dehradun','haridwar|Haridwar','nainital|Nainital','pauri garhwal|Pauri Garhwal','pithoragarh|Pithoragarh','rudraprayag|Rudraprayag','tehri garhwal|Tehri Garhwal','udham singh nagar|Udham Singh Nagar','uttarkashi|Uttarkashi'];
            }
            else if(s1.value == "West Bengal")
            {
                var optionArray = ['select district|Select District','alipurduar|Alipurduar','bankura|Bankura','birbhum|Birbhum','cooch behar|Cooch Behar','dakshin dinajpur|Dakshin Dinajpur','darjeeling|Darjeeling','hooghly|Hooghly','howrah|Howrah','jalpaiguri|Jalpaiguri','jhargram|Jhargram','kalimpong|Kalimpong','kolkata|Kolkata','maldah|Maldah','murshidabad|Murshidabad','nadia|Nadia','north 24 parganas|North 24 Parganas',
                'paschim bardhaman|Paschim Bardhaman','paschim medinipur|Paschim Medinipur','purba bardhaman|Purba Bardhaman','purba medinipur|Purba Medinipur','purulia|Purulia','south 24 parganas|South 24 Parganas','uttar dinajpur|Uttar Dinajpur'];
            }
            for(var option in optionArray)
            {
                var pair = optionArray[option].split("|");
                var newoption = document.createElement("option");
                newoption.value = pair[0];
                newoption.innerHTML = pair[1];
                s2.options.add(newoption);
            }
        }
</script>
@endsection