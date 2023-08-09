<?php
//####################################################################
$Button_CH = json_encode(['keyboard'=>[
[['text'=>'📟 تنظیم کانال دوم'],['text'=>'📟 تنظیم کانال اول']],
[['text'=>'🔙 برگشت']],
],'resize_keyboard'=>true]);
//////////------------------------\\\\\\\\\\\\\\
$Button_Join = json_encode(['inline_keyboard'=>[
[['text'=>"✅تایید عضویت",'callback_data'=>'join']],
]]);
//####################################################################
if(file_exists("Button/dok1.txt")){
$dok1 = file_get_contents("Button/dok1.txt");
}else{
$dok1 = "ساخت رسید |💠|";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dok2.txt")){
$dok2 = file_get_contents("Button/dok2.txt");
}else{
$dok2 = "حساب کاربری |⚙️|";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dok3.txt")){
$dok3 = file_get_contents("Button/dok3.txt");
}else{
$dok3 = "دعوت دیگران |⚡️|";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dok4.txt")){
$dok4 = file_get_contents("Button/dok4.txt");
}else{
$dok4 = "رسید های من |💾|";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dok5.txt")){
$dok5 = file_get_contents("Button/dok5.txt");
}else{
$dok5 = "راهنما |📋|";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dok6.txt")){
$dok6 = file_get_contents("Button/dok6.txt");
}else{
$dok6 = "پشتیبانی |🆘|";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dok9.txt")){
$dok9 = file_get_contents("Button/dok9.txt");
}else{
$dok9 = "ربات نمایندگی |⚙️|";
}
//####################################################################
if(file_exists("Button/dokk1.txt")){
$dokk1 = file_get_contents("Button/dokk1.txt");
}else{
$dokk1 = "🧾 آپ";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk2.txt")){
$dokk2 = file_get_contents("Button/dokk2.txt");
}else{
$dokk2 = "🧾 صاپ صادرات";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk3.txt")){
$dokk3 = file_get_contents("Button/dokk3.txt");
}else{
$dokk3 = "🧾 سپه انصار سابق";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk4.txt")){
$dokk4 = file_get_contents("Button/dokk4.txt");
}else{
$dokk4 = "🧾 ملت";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk5.txt")){
$dokk5 = file_get_contents("Button/dokk5.txt");
}else{
$dokk5 = "🧾 کاغذی 1";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk6.txt")){
$dokk6 = file_get_contents("Button/dokk6.txt");
}else{
$dokk6 = "🧾 کاغذی 2";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk7.txt")){
$dokk7 = file_get_contents("Button/dokk7.txt");
}else{
$dokk7 = "🧾 780";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk8.txt")){
$dokk8 = file_get_contents("Button/dokk8.txt");
}else{
$dokk8 = "🧾 اوانو";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk9.txt")){
$dokk9 = file_get_contents("Button/dokk9.txt");
}else{
$dokk9 = "🧾 همراه کارت";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk10.txt")){
$dokk10 = file_get_contents("Button/dokk10.txt");
}else{
$dokk10 = "🧾 ایوا";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk11.txt")){
$dokk11 = file_get_contents("Button/dokk11.txt");
}else{
$dokk11 = "🧾 بله";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk12.txt")){
$dokk12 = file_get_contents("Button/dokk12.txt");
}else{
$dokk12 = "🧾 تجارت";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk13.txt")){
$dokk13 = file_get_contents("Button/dokk13.txt");
}else{
$dokk13 = "🧾 ملی 1";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk14.txt")){
$dokk14 = file_get_contents("Button/dokk14.txt");
}else{
$dokk14 = "🧾 ملی 2";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk15.txt")){
$dokk15 = file_get_contents("Button/dokk15.txt");
}else{
$dokk15 = "🧾  نوین";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk16.txt")){
$dokk16 = file_get_contents("Button/dokk16.txt");
}else{
$dokk16 = "🧾  ست";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk17.txt")){
$dokk17 = file_get_contents("Button/dokk17.txt");
}else{
$dokk17 = "🧾  پست بانک";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk18.txt")){
$dokk18 = file_get_contents("Button/dokk18.txt");
}else{
$dokk18 = "🧾 مسکن";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk19.txt")){
$dokk19 = file_get_contents("Button/dokk19.txt");
}else{
$dokk19 = "🧾 دیجی پی";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk20.txt")){
$dokk20 = file_get_contents("Button/dokk20.txt");
}else{
$dokk20 = "🧾 تاپ";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk21.txt")){
$dokk21 = file_get_contents("Button/dokk21.txt");
}else{
$dokk21 = "🧾 سکه";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk22.txt")){
$dokk22 = file_get_contents("Button/dokk22.txt");
}else{
$dokk22 = "🧾 بانک شهر";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk23.txt")){
$dokk23 = file_get_contents("Button/dokk23.txt");
}else{
$dokk23 = "🧾 پاسارگاد";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk24.txt")){
$dokk24 = file_get_contents("Button/dokk24.txt");
}else{
$dokk24 = "🧾 صادرات 2";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk25.txt")){
$dokk25 = file_get_contents("Button/dokk25.txt");
}else{
$dokk25 = "🧾 7030";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk26.txt")){
$dokk26 = file_get_contents("Button/dokk26.txt");
}else{
$dokk26 = "🧾 کاغدی 3";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk27.txt")){
$dokk27 = file_get_contents("Button/dokk27.txt");
}else{
$dokk27 = "🛍 شارژ همراه اول";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk28.txt")){
$dokk28 = file_get_contents("Button/dokk28.txt");
}else{
$dokk28 = "🛍 شارژ ایرانسل";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk29.txt")){
$dokk29 = file_get_contents("Button/dokk29.txt");
}else{
$dokk29 = "🛍 شارژ رایتل";
}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/dokk30.txt")){
$dokk30 = file_get_contents("Button/dokk30.txt");
}else{
$dokk30 = "🧾 موجودی سامان";
}
//####################################################################
//----------------------------------------/////
if(file_exists("Button/dokc1.txt")){
$dokc1 = file_get_contents("Button/dokc1.txt");
}else{
$dokc1 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc2.txt")){
$dokc2 = file_get_contents("Button/dokc2.txt");
}else{
$dokc2 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc3.txt")){
$dokc3 = file_get_contents("Button/dokc3.txt");
}else{
$dokc3 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc4.txt")){
$dokc4 = file_get_contents("Button/dokc4.txt");
}else{
$dokc4 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc5.txt")){
$dokc5 = file_get_contents("Button/dokc5.txt");
}else{
$dokc5 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc6.txt")){
$dokc6 = file_get_contents("Button/dokc6.txt");
}else{
$dokc6 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc7.txt")){
$dokc7 = file_get_contents("Button/dokc7.txt");
}else{
$dokc7 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc8.txt")){
$dokc8 = file_get_contents("Button/dokc8.txt");
}else{
$dokc8 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc9.txt")){
$dokc9 = file_get_contents("Button/dokc9.txt");
}else{
$dokc9 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc10.txt")){
$dokc10 = file_get_contents("Button/dokc10.txt");
}else{
$dokc10 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc11.txt")){
$dokc11 = file_get_contents("Button/dokc11.txt");
}else{
$dokc11 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc12.txt")){
$dokc12 = file_get_contents("Button/dokc12.txt");
}else{
$dokc12 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc13.txt")){
$dokc13 = file_get_contents("Button/dokc13.txt");
}else{
$dokc13 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc14.txt")){
$dokc14 = file_get_contents("Button/dokc14.txt");
}else{
$dokc14 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc15.txt")){
$dokc15 = file_get_contents("Button/dokc15.txt");
}else{
$dokc15 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc16.txt")){
$dokc16 = file_get_contents("Button/dokc16.txt");
}else{
$dokc16 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc17.txt")){
$dokc17 = file_get_contents("Button/dokc17.txt");
}else{
$dokc17 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc18.txt")){
$dokc18 = file_get_contents("Button/dokc18.txt");
}else{
$dokc18 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc19.txt")){
$dokc19 = file_get_contents("Button/dokc19.txt");
}else{
$dokc19 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc20.txt")){
$dokc20 = file_get_contents("Button/dokc20.txt");
}else{
$dokc20 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc21.txt")){
$dokc21 = file_get_contents("Button/dokc21.txt");
}else{
$dokc21 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc22.txt")){
$dokc22 = file_get_contents("Button/dokc22.txt");
}else{
$dokc22 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc23.txt")){
$dokc23 = file_get_contents("Button/dokc23.txt");
}else{
$dokc23 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc24.txt")){
$dokc24 = file_get_contents("Button/dokc24.txt");
}else{
$dokc24 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc25.txt")){
$dokc25 = file_get_contents("Button/dokc25.txt");
}else{
$dokc25 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc26.txt")){
$dokc26 = file_get_contents("Button/dokc26.txt");
}else{
$dokc26 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc27.txt")){
$dokc27 = file_get_contents("Button/dokc27.txt");
}else{
$dokc27 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc28.txt")){
$dokc28 = file_get_contents("Button/dokc28.txt");
}else{
$dokc28 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc29.txt")){
$dokc29 = file_get_contents("Button/dokc29.txt");
}else{
$dokc29 = "1";
}
//----------------------------------------/////
if(file_exists("Button/dokc30.txt")){
$dokc30 = file_get_contents("Button/dokc30.txt");
}else{
$dokc30 = "1";
}
//----------------------------------------/////
//####################################################################
//----------------------------------------/////
if(file_exists("Button/starts.txt")){
$starts = file_get_contents("Button/starts.txt");
}else{
$starts = "0";
}
//----------------------------------------/////

//----------------------------------------/////
if(file_exists("Button/zirmjmaec.txt")){
$zirmjmaec = file_get_contents("Button/zirmjmaec.txt");
}else{
$zirmjmaec = "1";
}
//----------------------------------------/////
//####################################################################
//----------------------------------------/////
if(file_exists("Button/start.txt")){
$start = file_get_contents("Button/start.txt");
}else{
$start = "متن پیش فرض - قابل تنظیم از مدیریت";
}
//----------------------------------------/////
if(file_exists("Button/doktxt1.txt")){
$doktxt1 = file_get_contents("Button/doktxt1.txt");
}else{
$doktxt1 = "متن پیش فرض - قابل تنظیم از مدیریت";
}
//----------------------------------------/////
if(file_exists("Button/doktxt3.txt")){
$doktxt3 = file_get_contents("Button/doktxt3.txt");
}else{
$doktxt3 = "متن پیش فرض - قابل تنظیم از مدیریت";
}
//----------------------------------------/////
if(file_exists("Button/doktxt5.txt")){
$doktxt5 = file_get_contents("Button/doktxt5.txt");
}else{
$doktxt5 = "متن پیش فرض - قابل تنظیم از مدیریت";
}
//----------------------------------------/////
if(file_exists("Button/doktxt6.txt")){
$doktxt6 = file_get_contents("Button/doktxt6.txt");
}else{
$doktxt6 = "متن پیش فرض - قابل تنظیم از مدیریت";
}
//----------------------------------------/////
$etlatcr = "💁‍♂️ لطفا اطلاعات مورد نظر را به صورت زیر ارسال کنید.

1️⃣ خط اول : نام شماره کارت مقصد
2️⃣ خط دوم : مبلغ
3️⃣ خط سوم : شماره کارت مبدا
4️⃣ خط چهارم : شماره کارت مقصد

👇 مثال صحیح  :
حسین محمدی
100000
6037697495806639
6104669288274295";
$etlatcr1 = "💁‍♂️ لطفا اطلاعات مورد نظر را به صورت زیر ارسال کنید.

1️⃣ خط اول : نام شماره کارت مقصد
2️⃣ خط دوم : مبلغ
3️⃣ خط سوم : چهارم رقم آخر شماره کارت مبدا
4️⃣ خط چهارم : شماره کارت مقصد

👇 مثال صحیح  :
حسین محمدی
100000
4295
6104669288274295";
$etlatcr2 = "💁‍♂️ لطفا اطلاعات مورد نظر را به صورت زیر ارسال کنید.

1️⃣ خط اول : شماره مبایل
2️⃣ خط دوم : مبلغ

👇 مثال صحیح  :
09123456789
100000
";
$etlatcr3 = "💁‍♂️ لطفا اطلاعات مورد نظر را به صورت زیر ارسال کنید.

1️⃣ خط اول : نام شماره کارت 
2️⃣ خط دوم : مبلغ
3️⃣ خط سوم : شماره کارت 

👇 مثال صحیح  :
حسین محمدی
100000
6037697495806639
";
//----------------------------------------/////
if(file_exists("Button/cres.txt")){
$cres = file_get_contents("Button/cres.txt");
}else{
$cres = "رسیدت با موفقیت ساخته شد😎
❗️این ربات فقط جهت آشنایی شما با عمل فیشینگ است و هرگونه سواستفاده ما هیچ مسئولیتی نداریم❗️";
}
//####################################################################
if(file_exists("keyboard/home/line11.txt")){
$line1_1 = file_get_contents("keyboard/home/line11.txt");
if($line1_1 != null ){
$line1_1 = str_replace('DOK1',$dok1,$line1_1);
$line1_1 = str_replace('DOK2',$dok2,$line1_1);
$line1_1 = str_replace('DOK3',$dok3,$line1_1);
$line1_1 = str_replace('DOK4',$dok4,$line1_1);
$line1_1 = str_replace('DOK5',$dok5,$line1_1);
$line1_1 = str_replace('DOK6',$dok6,$line1_1);
$line1_1 = str_replace('DOK7',$DOK7,$line1_1);
}else{
$line1_1 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line12.txt")){
$line1_2 = file_get_contents("keyboard/home/line12.txt");
if($line1_2 != null ){
$line1_2 = str_replace('DOK1',$dok1,$line1_2);
$line1_2 = str_replace('DOK2',$dok2,$line1_2);
$line1_2 = str_replace('DOK3',$dok3,$line1_2);
$line1_2 = str_replace('DOK4',$dok4,$line1_2);
$line1_2 = str_replace('DOK5',$dok5,$line1_2);
$line1_2 = str_replace('DOK6',$dok6,$line1_2);
$line1_2 = str_replace('DOK7',$DOK7,$line1_2);
}else{
$line1_2 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line13.txt")){
$line1_3 = file_get_contents("keyboard/home/line13.txt");
if($line1_3 != null ){
$line1_3 = str_replace('DOK1',$dok1,$line1_3);
$line1_3 = str_replace('DOK2',$dok2,$line1_3);
$line1_3 = str_replace('DOK3',$dok3,$line1_3);
$line1_3 = str_replace('DOK4',$dok4,$line1_3);
$line1_3 = str_replace('DOK5',$dok5,$line1_3);
$line1_3 = str_replace('DOK6',$dok6,$line1_3);
$line1_3 = str_replace('DOK7',$DOK7,$line1_3);
}else{
$line1_3 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line14.txt")){
$line1_4 = file_get_contents("keyboard/home/line14.txt");
if($line1_4 != null ){
$line1_4 = str_replace('DOK1',$dok1,$line1_4);
$line1_4 = str_replace('DOK2',$dok2,$line1_4);
$line1_4 = str_replace('DOK3',$dok3,$line1_4);
$line1_4 = str_replace('DOK4',$dok4,$line1_4);
$line1_4 = str_replace('DOK5',$dok5,$line1_4);
$line1_4 = str_replace('DOK6',$dok6,$line1_4);
$line1_4 = str_replace('DOK7',$DOK7,$line1_4);
}else{
$line1_4 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line21.txt")){
$line2_1 = file_get_contents("keyboard/home/line21.txt");
if($line2_1 != null ){
$line2_1 = str_replace('DOK1',$dok1,$line2_1);
$line2_1 = str_replace('DOK2',$dok2,$line2_1);
$line2_1 = str_replace('DOK3',$dok3,$line2_1);
$line2_1 = str_replace('DOK4',$dok4,$line2_1);
$line2_1 = str_replace('DOK5',$dok5,$line2_1);
$line2_1 = str_replace('DOK6',$dok6,$line2_1);
$line2_1 = str_replace('DOK7',$DOK7,$line2_1);
}else{
$line2_1 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line22.txt")){
$line2_2 = file_get_contents("keyboard/home/line22.txt");
if($line2_2 != null ){
$line2_2 = str_replace('DOK1',$dok1,$line2_2);
$line2_2 = str_replace('DOK2',$dok2,$line2_2);
$line2_2 = str_replace('DOK3',$dok3,$line2_2);
$line2_2 = str_replace('DOK4',$dok4,$line2_2);
$line2_2 = str_replace('DOK5',$dok5,$line2_2);
$line2_2 = str_replace('DOK6',$dok6,$line2_2);
$line2_2 = str_replace('DOK7',$DOK7,$line2_2);
}else{
$line2_2 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line23.txt")){
$line2_3 = file_get_contents("keyboard/home/line23.txt");
if($line2_3 != null ){
$line2_3 = str_replace('DOK1',$dok1,$line2_3);
$line2_3 = str_replace('DOK2',$dok2,$line2_3);
$line2_3 = str_replace('DOK3',$dok3,$line2_3);
$line2_3 = str_replace('DOK4',$dok4,$line2_3);
$line2_3 = str_replace('DOK5',$dok5,$line2_3);
$line2_3 = str_replace('DOK6',$dok6,$line2_3);
$line2_3 = str_replace('DOK7',$DOK7,$line2_3);
}else{
$line2_3 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line24.txt")){
$line2_4 = file_get_contents("keyboard/home/line24.txt");
if($line2_4 != null ){
$line2_4 = str_replace('DOK1',$dok1,$line2_4);
$line2_4 = str_replace('DOK2',$dok2,$line2_4);
$line2_4 = str_replace('DOK3',$dok3,$line2_4);
$line2_4 = str_replace('DOK4',$dok4,$line2_4);
$line2_4 = str_replace('DOK5',$dok5,$line2_4);
$line2_4 = str_replace('DOK6',$dok6,$line2_4);
$line2_4 = str_replace('DOK7',$DOK7,$line2_4);
}else{
$line2_4 = "";
}}

//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line31.txt")){
$line3_1 = file_get_contents("keyboard/home/line31.txt");
if($line3_1 != null ){
$line3_1 = str_replace('DOK1',$dok1,$line3_1);
$line3_1 = str_replace('DOK2',$dok2,$line3_1);
$line3_1 = str_replace('DOK3',$dok3,$line3_1);
$line3_1 = str_replace('DOK4',$dok4,$line3_1);
$line3_1 = str_replace('DOK5',$dok5,$line3_1);
$line3_1 = str_replace('DOK6',$dok6,$line3_1);
$line3_1 = str_replace('DOK7',$DOK7,$line3_1);
}else{
$line3_1 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line32.txt")){
$line3_2 = file_get_contents("keyboard/home/line32.txt");
if($line3_2 != null ){
$line3_2 = str_replace('DOK1',$dok1,$line3_2);
$line3_2 = str_replace('DOK2',$dok2,$line3_2);
$line3_2 = str_replace('DOK3',$dok3,$line3_2);
$line3_2 = str_replace('DOK4',$dok4,$line3_2);
$line3_2 = str_replace('DOK5',$dok5,$line3_2);
$line3_2 = str_replace('DOK6',$dok6,$line3_2);
$line3_2 = str_replace('DOK7',$DOK7,$line3_2);
}else{
$line3_2 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line33.txt")){
$line3_3 = file_get_contents("keyboard/home/line33.txt");
if($line3_3 != null ){
$line3_3 = str_replace('DOK1',$dok1,$line3_3);
$line3_3 = str_replace('DOK2',$dok2,$line3_3);
$line3_3 = str_replace('DOK3',$dok3,$line3_3);
$line3_3 = str_replace('DOK4',$dok4,$line3_3);
$line3_3 = str_replace('DOK5',$dok5,$line3_3);
$line3_3 = str_replace('DOK6',$dok6,$line3_3);
$line3_3 = str_replace('DOK7',$DOK7,$line3_3);
}else{
$line3_3 = "";
}}//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line34.txt")){
$line3_4 = file_get_contents("keyboard/home/line34.txt");
if($line3_4 != null ){
$line3_4 = str_replace('DOK1',$dok1,$line3_4);
$line3_4 = str_replace('DOK2',$dok2,$line3_4);
$line3_4 = str_replace('DOK3',$dok3,$line3_4);
$line3_4 = str_replace('DOK4',$dok4,$line3_4);
$line3_4 = str_replace('DOK5',$dok5,$line3_4);
$line3_4 = str_replace('DOK6',$dok6,$line3_4);
$line3_4 = str_replace('DOK7',$DOK7,$line3_4);
}else{
$line3_4 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line41.txt")){
$line4_1 = file_get_contents("keyboard/home/line41.txt");
if($line4_1 != null ){
$line4_1 = str_replace('DOK1',$dok1,$line4_1);
$line4_1 = str_replace('DOK2',$dok2,$line4_1);
$line4_1 = str_replace('DOK3',$dok3,$line4_1);
$line4_1 = str_replace('DOK4',$dok4,$line4_1);
$line4_1 = str_replace('DOK5',$dok5,$line4_1);
$line4_1 = str_replace('DOK6',$dok6,$line4_1);
$line4_1 = str_replace('DOK7',$DOK7,$line4_1);
}else{
$line4_1 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line42.txt")){
$line4_2 = file_get_contents("keyboard/home/line42.txt");
if($line4_2 != null ){
$line4_2 = str_replace('DOK1',$dok1,$line4_2);
$line4_2 = str_replace('DOK2',$dok2,$line4_2);
$line4_2 = str_replace('DOK3',$dok3,$line4_2);
$line4_2 = str_replace('DOK4',$dok4,$line4_2);
$line4_2 = str_replace('DOK5',$dok5,$line4_2);
$line4_2 = str_replace('DOK6',$dok6,$line4_2);
$line4_2 = str_replace('DOK7',$DOK7,$line4_2);
}else{
$line4_2 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line43.txt")){
$line4_3 = file_get_contents("keyboard/home/line43.txt");
if($line4_3 != null ){
$line4_3 = str_replace('DOK1',$dok1,$line4_3);
$line4_3 = str_replace('DOK2',$dok2,$line4_3);
$line4_3 = str_replace('DOK3',$dok3,$line4_3);
$line4_3 = str_replace('DOK4',$dok4,$line4_3);
$line4_3 = str_replace('DOK5',$dok5,$line4_3);
$line4_3 = str_replace('DOK6',$dok6,$line4_3);
$line4_3 = str_replace('DOK7',$DOK7,$line4_3);
}else{
$line4_3 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line44.txt")){
$line4_4 = file_get_contents("keyboard/home/line44.txt");
if($line4_4 != null ){
$line4_4 = str_replace('DOK1',$dok1,$line4_4);
$line4_4 = str_replace('DOK2',$dok2,$line4_4);
$line4_4 = str_replace('DOK3',$dok3,$line4_4);
$line4_4 = str_replace('DOK4',$dok4,$line4_4);
$line4_4 = str_replace('DOK5',$dok5,$line4_4);
$line4_4 = str_replace('DOK6',$dok6,$line4_4);
$line4_4 = str_replace('DOK7',$DOK7,$line4_4);
}else{
$line4_4 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line51.txt")){
$line5_1 = file_get_contents("keyboard/home/line51.txt");
if($line5_1 != null ){
$line5_1 = str_replace('DOK1',$dok1,$line5_1);
$line5_1 = str_replace('DOK2',$dok2,$line5_1);
$line5_1 = str_replace('DOK3',$dok3,$line5_1);
$line5_1 = str_replace('DOK4',$dok4,$line5_1);
$line5_1 = str_replace('DOK5',$dok5,$line5_1);
$line5_1 = str_replace('DOK6',$dok6,$line5_1);
$line5_1 = str_replace('DOK7',$DOK7,$line5_1);
}else{
$line5_1 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line52.txt")){
$line5_2 = file_get_contents("keyboard/home/line52.txt");
if($line5_2 != null ){
$line5_2 = str_replace('DOK1',$dok1,$line5_2);
$line5_2 = str_replace('DOK2',$dok2,$line5_2);
$line5_2 = str_replace('DOK3',$dok3,$line5_2);
$line5_2 = str_replace('DOK4',$dok4,$line5_2);
$line5_2 = str_replace('DOK5',$dok5,$line5_2);
$line5_2 = str_replace('DOK6',$dok6,$line5_2);
$line5_2 = str_replace('DOK7',$DOK7,$line5_2);
}else{
$line5_2 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line53.txt")){
$line5_3 = file_get_contents("keyboard/home/line53.txt");
if($line5_3 != null ){
$line5_3 = str_replace('DOK1',$dok1,$line5_3);
$line5_3 = str_replace('DOK2',$dok2,$line5_3);
$line5_3 = str_replace('DOK3',$dok3,$line5_3);
$line5_3 = str_replace('DOK4',$dok4,$line5_3);
$line5_3 = str_replace('DOK5',$dok5,$line5_3);
$line5_3 = str_replace('DOK6',$dok6,$line5_3);
$line5_3 = str_replace('DOK7',$DOK7,$line5_3);
}else{
$line5_3 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line55.txt")){
$line5_5 = file_get_contents("keyboard/home/line55.txt");
if($line5_5 != null ){
$line5_5 = str_replace('DOK1',$dok1,$line5_5);
$line5_5 = str_replace('DOK2',$dok2,$line5_5);
$line5_5 = str_replace('DOK3',$dok3,$line5_5);
$line5_5 = str_replace('DOK4',$dok4,$line5_5);
$line5_5 = str_replace('DOK5',$dok5,$line5_5);
$line5_5 = str_replace('DOK6',$dok6,$line5_5);
$line5_5 = str_replace('DOK7',$DOK7,$line5_5);
}else{
$line5_5 = "";
}}
/////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
//////////------------------------\\\\\\\\\\\\\\
//////////////////////////////////////////////////////////////////////////////
if(file_exists("keyboard/create/linee11.txt")){
$linee1_1 = file_get_contents("keyboard/create/linee11.txt");
if($linee1_1 != null ){
$linee1_1 = str_replace('1',$dokk1,$linee1_1);
$linee1_1 = str_replace('2',$dokk2,$linee1_1);
$linee1_1 = str_replace('3',$dokk3,$linee1_1);
$linee1_1 = str_replace('q',$dokk4,$linee1_1);
$linee1_1 = str_replace('w',$dokk5,$linee1_1);
$linee1_1 = str_replace('e',$dokk6,$linee1_1);
$linee1_1 = str_replace('r',$dokk7,$linee1_1);
$linee1_1 = str_replace('t',$dokk8,$linee1_1);
$linee1_1 = str_replace('y',$dokk9,$linee1_1);
$linee1_1 = str_replace('u',$dokk10,$linee1_1);
$linee1_1 = str_replace('i',$dokk11,$linee1_1);
$linee1_1 = str_replace('o',$dokk12,$linee1_1);
$linee1_1 = str_replace('p',$dokk13,$linee1_1);
$linee1_1 = str_replace('a',$dokk14,$linee1_1);
$linee1_1 = str_replace('s',$dokk15,$linee1_1);
$linee1_1 = str_replace('d',$dokk16,$linee1_1);
$linee1_1 = str_replace('f',$dokk17,$linee1_1);
$linee1_1 = str_replace('g',$dokk18,$linee1_1);
$linee1_1 = str_replace('h',$dokk19,$linee1_1);
$linee1_1 = str_replace('j',$dokk20,$linee1_1);
$linee1_1 = str_replace('k',$dokk21,$linee1_1);
$linee1_1 = str_replace('l',$dokk22,$linee1_1);
$linee1_1 = str_replace('z',$dokk23,$linee1_1);
$linee1_1 = str_replace('x',$dokk24,$linee1_1);
$linee1_1 = str_replace('c',$dokk25,$linee1_1);
$linee1_1 = str_replace('v',$dokk26,$linee1_1);
$linee1_1 = str_replace('b',$dokk27,$linee1_1);
$linee1_1 = str_replace('n',$dokk28,$linee1_1);
$linee1_1 = str_replace('m',$dokk29,$linee1_1);
$linee1_1 = str_replace('*',$dokk30,$linee1_1);
}else{
$linee1_1 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee12.txt")){
$linee1_2 = file_get_contents("keyboard/create/linee12.txt");
if($linee1_2 != null ){
$linee1_2 = str_replace('1',$dokk1,$linee1_2);
$linee1_2 = str_replace('2',$dokk2,$linee1_2);
$linee1_2 = str_replace('3',$dokk3,$linee1_2);
$linee1_2 = str_replace('q',$dokk4,$linee1_2);
$linee1_2 = str_replace('w',$dokk5,$linee1_2);
$linee1_2 = str_replace('e',$dokk6,$linee1_2);
$linee1_2 = str_replace('r',$dokk7,$linee1_2);
$linee1_2 = str_replace('t',$dokk8,$linee1_2);
$linee1_2 = str_replace('y',$dokk9,$linee1_2);
$linee1_2 = str_replace('u',$dokk10,$linee1_2);
$linee1_2 = str_replace('i',$dokk11,$linee1_2);
$linee1_2 = str_replace('o',$dokk12,$linee1_2);
$linee1_2 = str_replace('p',$dokk13,$linee1_2);
$linee1_2 = str_replace('a',$dokk14,$linee1_2);
$linee1_2 = str_replace('s',$dokk15,$linee1_2);
$linee1_2 = str_replace('d',$dokk16,$linee1_2);
$linee1_2 = str_replace('f',$dokk17,$linee1_2);
$linee1_2 = str_replace('g',$dokk18,$linee1_2);
$linee1_2 = str_replace('h',$dokk19,$linee1_2);
$linee1_2 = str_replace('j',$dokk20,$linee1_2);
$linee1_2 = str_replace('k',$dokk21,$linee1_2);
$linee1_2 = str_replace('l',$dokk22,$linee1_2);
$linee1_2 = str_replace('z',$dokk23,$linee1_2);
$linee1_2 = str_replace('x',$dokk24,$linee1_2);
$linee1_2 = str_replace('c',$dokk25,$linee1_2);
$linee1_2 = str_replace('v',$dokk26,$linee1_2);
$linee1_2 = str_replace('b',$dokk27,$linee1_2);
$linee1_2 = str_replace('n',$dokk28,$linee1_2);
$linee1_2 = str_replace('m',$dokk29,$linee1_2);
$linee1_2 = str_replace('*',$dokk30,$linee1_2);
}else{
$linee1_2 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee13.txt")){
$linee1_3 = file_get_contents("keyboard/create/linee13.txt");
if($linee1_3 != null ){
$linee1_3 = str_replace('1',$dokk1,$linee1_3);
$linee1_3 = str_replace('2',$dokk2,$linee1_3);
$linee1_3 = str_replace('3',$dokk3,$linee1_3);
$linee1_3 = str_replace('q',$dokk4,$linee1_3);
$linee1_3 = str_replace('w',$dokk5,$linee1_3);
$linee1_3 = str_replace('e',$dokk6,$linee1_3);
$linee1_3 = str_replace('r',$dokk7,$linee1_3);
$linee1_3 = str_replace('t',$dokk8,$linee1_3);
$linee1_3 = str_replace('y',$dokk9,$linee1_3);
$linee1_3 = str_replace('u',$dokk10,$linee1_3);
$linee1_3 = str_replace('i',$dokk11,$linee1_3);
$linee1_3 = str_replace('o',$dokk12,$linee1_3);
$linee1_3 = str_replace('p',$dokk13,$linee1_3);
$linee1_3 = str_replace('a',$dokk14,$linee1_3);
$linee1_3 = str_replace('s',$dokk15,$linee1_3);
$linee1_3 = str_replace('d',$dokk16,$linee1_3);
$linee1_3 = str_replace('f',$dokk17,$linee1_3);
$linee1_3 = str_replace('g',$dokk18,$linee1_3);
$linee1_3 = str_replace('h',$dokk19,$linee1_3);
$linee1_3 = str_replace('j',$dokk20,$linee1_3);
$linee1_3 = str_replace('k',$dokk21,$linee1_3);
$linee1_3 = str_replace('l',$dokk22,$linee1_3);
$linee1_3 = str_replace('z',$dokk23,$linee1_3);
$linee1_3 = str_replace('x',$dokk24,$linee1_3);
$linee1_3 = str_replace('c',$dokk25,$linee1_3);
$linee1_3 = str_replace('v',$dokk26,$linee1_3);
$linee1_3 = str_replace('b',$dokk27,$linee1_3);
$linee1_3 = str_replace('n',$dokk28,$linee1_3);
$linee1_3 = str_replace('m',$dokk29,$linee1_3);
$linee1_3 = str_replace('*',$dokk30,$linee1_3);
}else{
$linee1_3 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee14.txt")){
$linee1_4 = file_get_contents("keyboard/create/linee14.txt");
if($linee1_4 != null ){
$linee1_4 = str_replace('1',$dokk1,$linee1_4);
$linee1_4 = str_replace('2',$dokk2,$linee1_4);
$linee1_4 = str_replace('3',$dokk3,$linee1_4);
$linee1_4 = str_replace('q',$dokk4,$linee1_4);
$linee1_4 = str_replace('w',$dokk5,$linee1_4);
$linee1_4 = str_replace('e',$dokk6,$linee1_4);
$linee1_4 = str_replace('r',$dokk7,$linee1_4);
$linee1_4 = str_replace('t',$dokk8,$linee1_4);
$linee1_4 = str_replace('y',$dokk9,$linee1_4);
$linee1_4 = str_replace('u',$dokk10,$linee1_4);
$linee1_4 = str_replace('i',$dokk11,$linee1_4);
$linee1_4 = str_replace('o',$dokk12,$linee1_4);
$linee1_4 = str_replace('p',$dokk13,$linee1_4);
$linee1_4 = str_replace('a',$dokk14,$linee1_4);
$linee1_4 = str_replace('s',$dokk15,$linee1_4);
$linee1_4 = str_replace('d',$dokk16,$linee1_4);
$linee1_4 = str_replace('f',$dokk17,$linee1_4);
$linee1_4 = str_replace('g',$dokk18,$linee1_4);
$linee1_4 = str_replace('h',$dokk19,$linee1_4);
$linee1_4 = str_replace('j',$dokk20,$linee1_4);
$linee1_4 = str_replace('k',$dokk21,$linee1_4);
$linee1_4 = str_replace('l',$dokk22,$linee1_4);
$linee1_4 = str_replace('z',$dokk23,$linee1_4);
$linee1_4 = str_replace('x',$dokk24,$linee1_4);
$linee1_4 = str_replace('c',$dokk25,$linee1_4);
$linee1_4 = str_replace('v',$dokk26,$linee1_4);
$linee1_4 = str_replace('b',$dokk27,$linee1_4);
$linee1_4 = str_replace('n',$dokk28,$linee1_4);
$linee1_4 = str_replace('m',$dokk29,$linee1_4);
$linee1_4 = str_replace('*',$dokk30,$linee1_4);
}else{
$linee1_4 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee21.txt")){
$linee2_1 = file_get_contents("keyboard/create/linee21.txt");
if($linee2_1 != null ){
$linee2_1 = str_replace('1',$dokk1,$linee2_1);
$linee2_1 = str_replace('2',$dokk2,$linee2_1);
$linee2_1 = str_replace('3',$dokk3,$linee2_1);
$linee2_1 = str_replace('q',$dokk4,$linee2_1);
$linee2_1 = str_replace('w',$dokk5,$linee2_1);
$linee2_1 = str_replace('e',$dokk6,$linee2_1);
$linee2_1 = str_replace('r',$dokk7,$linee2_1);
$linee2_1 = str_replace('t',$dokk8,$linee2_1);
$linee2_1 = str_replace('y',$dokk9,$linee2_1);
$linee2_1 = str_replace('u',$dokk10,$linee2_1);
$linee2_1 = str_replace('i',$dokk11,$linee2_1);
$linee2_1 = str_replace('o',$dokk12,$linee2_1);
$linee2_1 = str_replace('p',$dokk13,$linee2_1);
$linee2_1 = str_replace('a',$dokk14,$linee2_1);
$linee2_1 = str_replace('s',$dokk15,$linee2_1);
$linee2_1 = str_replace('d',$dokk16,$linee2_1);
$linee2_1 = str_replace('f',$dokk17,$linee2_1);
$linee2_1 = str_replace('g',$dokk18,$linee2_1);
$linee2_1 = str_replace('h',$dokk19,$linee2_1);
$linee2_1 = str_replace('j',$dokk20,$linee2_1);
$linee2_1 = str_replace('k',$dokk21,$linee2_1);
$linee2_1 = str_replace('l',$dokk22,$linee2_1);
$linee2_1 = str_replace('z',$dokk23,$linee2_1);
$linee2_1 = str_replace('x',$dokk24,$linee2_1);
$linee2_1 = str_replace('c',$dokk25,$linee2_1);
$linee2_1 = str_replace('v',$dokk26,$linee2_1);
$linee2_1 = str_replace('b',$dokk27,$linee2_1);
$linee2_1 = str_replace('n',$dokk28,$linee2_1);
$linee2_1 = str_replace('m',$dokk29,$linee2_1);
$linee2_1 = str_replace('*',$dokk30,$linee2_1);
}else{
$linee2_1 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee22.txt")){
$linee2_2 = file_get_contents("keyboard/create/linee22.txt");
if($linee2_2 != null ){
$linee2_2 = str_replace('1',$dokk1,$linee2_2);
$linee2_2 = str_replace('2',$dokk2,$linee2_2);
$linee2_2 = str_replace('3',$dokk3,$linee2_2);
$linee2_2 = str_replace('q',$dokk4,$linee2_2);
$linee2_2 = str_replace('w',$dokk5,$linee2_2);
$linee2_2 = str_replace('e',$dokk6,$linee2_2);
$linee2_2 = str_replace('r',$dokk7,$linee2_2);
$linee2_2 = str_replace('t',$dokk8,$linee2_2);
$linee2_2 = str_replace('y',$dokk9,$linee2_2);
$linee2_2 = str_replace('u',$dokk10,$linee2_2);
$linee2_2 = str_replace('i',$dokk11,$linee2_2);
$linee2_2 = str_replace('o',$dokk12,$linee2_2);
$linee2_2 = str_replace('p',$dokk13,$linee2_2);
$linee2_2 = str_replace('a',$dokk14,$linee2_2);
$linee2_2 = str_replace('s',$dokk15,$linee2_2);
$linee2_2 = str_replace('d',$dokk16,$linee2_2);
$linee2_2 = str_replace('f',$dokk17,$linee2_2);
$linee2_2 = str_replace('g',$dokk18,$linee2_2);
$linee2_2 = str_replace('h',$dokk19,$linee2_2);
$linee2_2 = str_replace('j',$dokk20,$linee2_2);
$linee2_2 = str_replace('k',$dokk21,$linee2_2);
$linee2_2 = str_replace('l',$dokk22,$linee2_2);
$linee2_2 = str_replace('z',$dokk23,$linee2_2);
$linee2_2 = str_replace('x',$dokk24,$linee2_2);
$linee2_2 = str_replace('c',$dokk25,$linee2_2);
$linee2_2 = str_replace('v',$dokk26,$linee2_2);
$linee2_2 = str_replace('b',$dokk27,$linee2_2);
$linee2_2 = str_replace('n',$dokk28,$linee2_2);
$linee2_2 = str_replace('m',$dokk29,$linee2_2);
$linee2_2 = str_replace('*',$dokk30,$linee2_2);
}else{
$linee2_2 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee23.txt")){
$linee2_3 = file_get_contents("keyboard/create/linee23.txt");
if($linee2_3 != null ){
$linee2_3 = str_replace('1',$dokk1,$linee2_3);
$linee2_3 = str_replace('2',$dokk2,$linee2_3);
$linee2_3 = str_replace('3',$dokk3,$linee2_3);
$linee2_3 = str_replace('q',$dokk4,$linee2_3);
$linee2_3 = str_replace('w',$dokk5,$linee2_3);
$linee2_3 = str_replace('e',$dokk6,$linee2_3);
$linee2_3 = str_replace('r',$dokk7,$linee2_3);
$linee2_3 = str_replace('t',$dokk8,$linee2_3);
$linee2_3 = str_replace('y',$dokk9,$linee2_3);
$linee2_3 = str_replace('u',$dokk10,$linee2_3);
$linee2_3 = str_replace('i',$dokk11,$linee2_3);
$linee2_3 = str_replace('o',$dokk12,$linee2_3);
$linee2_3 = str_replace('p',$dokk13,$linee2_3);
$linee2_3 = str_replace('a',$dokk14,$linee2_3);
$linee2_3 = str_replace('s',$dokk15,$linee2_3);
$linee2_3 = str_replace('d',$dokk16,$linee2_3);
$linee2_3 = str_replace('f',$dokk17,$linee2_3);
$linee2_3 = str_replace('g',$dokk18,$linee2_3);
$linee2_3 = str_replace('h',$dokk19,$linee2_3);
$linee2_3 = str_replace('j',$dokk20,$linee2_3);
$linee2_3 = str_replace('k',$dokk21,$linee2_3);
$linee2_3 = str_replace('l',$dokk22,$linee2_3);
$linee2_3 = str_replace('z',$dokk23,$linee2_3);
$linee2_3 = str_replace('x',$dokk24,$linee2_3);
$linee2_3 = str_replace('c',$dokk25,$linee2_3);
$linee2_3 = str_replace('v',$dokk26,$linee2_3);
$linee2_3 = str_replace('b',$dokk27,$linee2_3);
$linee2_3 = str_replace('n',$dokk28,$linee2_3);
$linee2_3 = str_replace('m',$dokk29,$linee2_3);
$linee2_3 = str_replace('*',$dokk30,$linee2_3);
}else{
$linee2_3 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee24.txt")){
$linee2_4 = file_get_contents("keyboard/create/linee24.txt");
if($linee2_4 != null ){
$linee2_4 = str_replace('1',$dokk1,$linee2_4);
$linee2_4 = str_replace('2',$dokk2,$linee2_4);
$linee2_4 = str_replace('3',$dokk3,$linee2_4);
$linee2_4 = str_replace('q',$dokk4,$linee2_4);
$linee2_4 = str_replace('w',$dokk5,$linee2_4);
$linee2_4 = str_replace('e',$dokk6,$linee2_4);
$linee2_4 = str_replace('r',$dokk7,$linee2_4);
$linee2_4 = str_replace('t',$dokk8,$linee2_4);
$linee2_4 = str_replace('y',$dokk9,$linee2_4);
$linee2_4 = str_replace('u',$dokk10,$linee2_4);
$linee2_4 = str_replace('i',$dokk11,$linee2_4);
$linee2_4 = str_replace('o',$dokk12,$linee2_4);
$linee2_4 = str_replace('p',$dokk13,$linee2_4);
$linee2_4 = str_replace('a',$dokk14,$linee2_4);
$linee2_4 = str_replace('s',$dokk15,$linee2_4);
$linee2_4 = str_replace('d',$dokk16,$linee2_4);
$linee2_4 = str_replace('f',$dokk17,$linee2_4);
$linee2_4 = str_replace('g',$dokk18,$linee2_4);
$linee2_4 = str_replace('h',$dokk19,$linee2_4);
$linee2_4 = str_replace('j',$dokk20,$linee2_4);
$linee2_4 = str_replace('k',$dokk21,$linee2_4);
$linee2_4 = str_replace('l',$dokk22,$linee2_4);
$linee2_4 = str_replace('z',$dokk23,$linee2_4);
$linee2_4 = str_replace('x',$dokk24,$linee2_4);
$linee2_4 = str_replace('c',$dokk25,$linee2_4);
$linee2_4 = str_replace('v',$dokk26,$linee2_4);
$linee2_4 = str_replace('b',$dokk27,$linee2_4);
$linee2_4 = str_replace('n',$dokk28,$linee2_4);
$linee2_4 = str_replace('m',$dokk29,$linee2_4);
$linee2_4 = str_replace('*',$dokk30,$linee2_4);
}else{
$linee2_4 = "";
}}

//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee31.txt")){
$linee3_1 = file_get_contents("keyboard/create/linee31.txt");
if($linee3_1 != null ){
$linee3_1 = str_replace('1',$dokk1,$linee3_1);
$linee3_1 = str_replace('2',$dokk2,$linee3_1);
$linee3_1 = str_replace('3',$dokk3,$linee3_1);
$linee3_1 = str_replace('q',$dokk4,$linee3_1);
$linee3_1 = str_replace('w',$dokk5,$linee3_1);
$linee3_1 = str_replace('e',$dokk6,$linee3_1);
$linee3_1 = str_replace('r',$dokk7,$linee3_1);
$linee3_1 = str_replace('t',$dokk8,$linee3_1);
$linee3_1 = str_replace('y',$dokk9,$linee3_1);
$linee3_1 = str_replace('u',$dokk10,$linee3_1);
$linee3_1 = str_replace('i',$dokk11,$linee3_1);
$linee3_1 = str_replace('o',$dokk12,$linee3_1);
$linee3_1 = str_replace('p',$dokk13,$linee3_1);
$linee3_1 = str_replace('a',$dokk14,$linee3_1);
$linee3_1 = str_replace('s',$dokk15,$linee3_1);
$linee3_1 = str_replace('d',$dokk16,$linee3_1);
$linee3_1 = str_replace('f',$dokk17,$linee3_1);
$linee3_1 = str_replace('g',$dokk18,$linee3_1);
$linee3_1 = str_replace('h',$dokk19,$linee3_1);
$linee3_1 = str_replace('j',$dokk20,$linee3_1);
$linee3_1 = str_replace('k',$dokk21,$linee3_1);
$linee3_1 = str_replace('l',$dokk22,$linee3_1);
$linee3_1 = str_replace('z',$dokk23,$linee3_1);
$linee3_1 = str_replace('x',$dokk24,$linee3_1);
$linee3_1 = str_replace('c',$dokk25,$linee3_1);
$linee3_1 = str_replace('v',$dokk26,$linee3_1);
$linee3_1 = str_replace('b',$dokk27,$linee3_1);
$linee3_1 = str_replace('n',$dokk28,$linee3_1);
$linee3_1 = str_replace('m',$dokk29,$linee3_1);
$linee3_1 = str_replace('*',$dokk30,$linee3_1);
}else{
$linee3_1 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee32.txt")){
$linee3_2 = file_get_contents("keyboard/create/linee32.txt");
if($linee3_2 != null ){
$linee3_2 = str_replace('1',$dokk1,$linee3_2);
$linee3_2 = str_replace('2',$dokk2,$linee3_2);
$linee3_2 = str_replace('3',$dokk3,$linee3_2);
$linee3_2 = str_replace('q',$dokk4,$linee3_2);
$linee3_2 = str_replace('w',$dokk5,$linee3_2);
$linee3_2 = str_replace('e',$dokk6,$linee3_2);
$linee3_2 = str_replace('r',$dokk7,$linee3_2);
$linee3_2 = str_replace('t',$dokk8,$linee3_2);
$linee3_2 = str_replace('y',$dokk9,$linee3_2);
$linee3_2 = str_replace('u',$dokk10,$linee3_2);
$linee3_2 = str_replace('i',$dokk11,$linee3_2);
$linee3_2 = str_replace('o',$dokk12,$linee3_2);
$linee3_2 = str_replace('p',$dokk13,$linee3_2);
$linee3_2 = str_replace('a',$dokk14,$linee3_2);
$linee3_2 = str_replace('s',$dokk15,$linee3_2);
$linee3_2 = str_replace('d',$dokk16,$linee3_2);
$linee3_2 = str_replace('f',$dokk17,$linee3_2);
$linee3_2 = str_replace('g',$dokk18,$linee3_2);
$linee3_2 = str_replace('h',$dokk19,$linee3_2);
$linee3_2 = str_replace('j',$dokk20,$linee3_2);
$linee3_2 = str_replace('k',$dokk21,$linee3_2);
$linee3_2 = str_replace('l',$dokk22,$linee3_2);
$linee3_2 = str_replace('z',$dokk23,$linee3_2);
$linee3_2 = str_replace('x',$dokk24,$linee3_2);
$linee3_2 = str_replace('c',$dokk25,$linee3_2);
$linee3_2 = str_replace('v',$dokk26,$linee3_2);
$linee3_2 = str_replace('b',$dokk27,$linee3_2);
$linee3_2 = str_replace('n',$dokk28,$linee3_2);
$linee3_2 = str_replace('m',$dokk29,$linee3_2);
$linee3_2 = str_replace('*',$dokk30,$linee3_2);
}else{
$linee3_2 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee33.txt")){
$linee3_3 = file_get_contents("keyboard/create/linee33.txt");
if($linee3_3 != null ){
$linee3_3 = str_replace('1',$dokk1,$linee3_3);
$linee3_3 = str_replace('2',$dokk2,$linee3_3);
$linee3_3 = str_replace('3',$dokk3,$linee3_3);
$linee3_3 = str_replace('q',$dokk4,$linee3_3);
$linee3_3 = str_replace('w',$dokk5,$linee3_3);
$linee3_3 = str_replace('e',$dokk6,$linee3_3);
$linee3_3 = str_replace('r',$dokk7,$linee3_3);
$linee3_3 = str_replace('t',$dokk8,$linee3_3);
$linee3_3 = str_replace('y',$dokk9,$linee3_3);
$linee3_3 = str_replace('u',$dokk10,$linee3_3);
$linee3_3 = str_replace('i',$dokk11,$linee3_3);
$linee3_3 = str_replace('o',$dokk12,$linee3_3);
$linee3_3 = str_replace('p',$dokk13,$linee3_3);
$linee3_3 = str_replace('a',$dokk14,$linee3_3);
$linee3_3 = str_replace('s',$dokk15,$linee3_3);
$linee3_3 = str_replace('d',$dokk16,$linee3_3);
$linee3_3 = str_replace('f',$dokk17,$linee3_3);
$linee3_3 = str_replace('g',$dokk18,$linee3_3);
$linee3_3 = str_replace('h',$dokk19,$linee3_3);
$linee3_3 = str_replace('j',$dokk20,$linee3_3);
$linee3_3 = str_replace('k',$dokk21,$linee3_3);
$linee3_3 = str_replace('l',$dokk22,$linee3_3);
$linee3_3 = str_replace('z',$dokk23,$linee3_3);
$linee3_3 = str_replace('x',$dokk24,$linee3_3);
$linee3_3 = str_replace('c',$dokk25,$linee3_3);
$linee3_3 = str_replace('v',$dokk26,$linee3_3);
$linee3_3 = str_replace('b',$dokk27,$linee3_3);
$linee3_3 = str_replace('n',$dokk28,$linee3_3);
$linee3_3 = str_replace('m',$dokk29,$linee3_3);
$linee3_3 = str_replace('*',$dokk30,$linee3_3);
}else{
$linee3_3 = "";
}}//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee34.txt")){
$linee3_4 = file_get_contents("keyboard/create/linee34.txt");
if($linee3_4 != null ){
$linee3_4 = str_replace('1',$dokk1,$linee3_4);
$linee3_4 = str_replace('2',$dokk2,$linee3_4);
$linee3_4 = str_replace('3',$dokk3,$linee3_4);
$linee3_4 = str_replace('q',$dokk4,$linee3_4);
$linee3_4 = str_replace('w',$dokk5,$linee3_4);
$linee3_4 = str_replace('e',$dokk6,$linee3_4);
$linee3_4 = str_replace('r',$dokk7,$linee3_4);
$linee3_4 = str_replace('t',$dokk8,$linee3_4);
$linee3_4 = str_replace('y',$dokk9,$linee3_4);
$linee3_4 = str_replace('u',$dokk10,$linee3_4);
$linee3_4 = str_replace('i',$dokk11,$linee3_4);
$linee3_4 = str_replace('o',$dokk12,$linee3_4);
$linee3_4 = str_replace('p',$dokk13,$linee3_4);
$linee3_4 = str_replace('a',$dokk14,$linee3_4);
$linee3_4 = str_replace('s',$dokk15,$linee3_4);
$linee3_4 = str_replace('d',$dokk16,$linee3_4);
$linee3_4 = str_replace('f',$dokk17,$linee3_4);
$linee3_4 = str_replace('g',$dokk18,$linee3_4);
$linee3_4 = str_replace('h',$dokk19,$linee3_4);
$linee3_4 = str_replace('j',$dokk20,$linee3_4);
$linee3_4 = str_replace('k',$dokk21,$linee3_4);
$linee3_4 = str_replace('l',$dokk22,$linee3_4);
$linee3_4 = str_replace('z',$dokk23,$linee3_4);
$linee3_4 = str_replace('x',$dokk24,$linee3_4);
$linee3_4 = str_replace('c',$dokk25,$linee3_4);
$linee3_4 = str_replace('v',$dokk26,$linee3_4);
$linee3_4 = str_replace('b',$dokk27,$linee3_4);
$linee3_4 = str_replace('n',$dokk28,$linee3_4);
$linee3_4 = str_replace('m',$dokk29,$linee3_4);
$linee3_4 = str_replace('*',$dokk30,$linee3_4);
}else{
$linee3_4 = "";
}}

//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee41.txt")){
$linee4_1 = file_get_contents("keyboard/create/linee41.txt");
if($linee4_1 != null ){
$linee4_1 = str_replace('1',$dokk1,$linee4_1);
$linee4_1 = str_replace('2',$dokk2,$linee4_1);
$linee4_1 = str_replace('3',$dokk3,$linee4_1);
$linee4_1 = str_replace('q',$dokk4,$linee4_1);
$linee4_1 = str_replace('w',$dokk5,$linee4_1);
$linee4_1 = str_replace('e',$dokk6,$linee4_1);
$linee4_1 = str_replace('r',$dokk7,$linee4_1);
$linee4_1 = str_replace('t',$dokk8,$linee4_1);
$linee4_1 = str_replace('y',$dokk9,$linee4_1);
$linee4_1 = str_replace('u',$dokk10,$linee4_1);
$linee4_1 = str_replace('i',$dokk11,$linee4_1);
$linee4_1 = str_replace('o',$dokk12,$linee4_1);
$linee4_1 = str_replace('p',$dokk13,$linee4_1);
$linee4_1 = str_replace('a',$dokk14,$linee4_1);
$linee4_1 = str_replace('s',$dokk15,$linee4_1);
$linee4_1 = str_replace('d',$dokk16,$linee4_1);
$linee4_1 = str_replace('f',$dokk17,$linee4_1);
$linee4_1 = str_replace('g',$dokk18,$linee4_1);
$linee4_1 = str_replace('h',$dokk19,$linee4_1);
$linee4_1 = str_replace('j',$dokk20,$linee4_1);
$linee4_1 = str_replace('k',$dokk21,$linee4_1);
$linee4_1 = str_replace('l',$dokk22,$linee4_1);
$linee4_1 = str_replace('z',$dokk23,$linee4_1);
$linee4_1 = str_replace('x',$dokk24,$linee4_1);
$linee4_1 = str_replace('c',$dokk25,$linee4_1);
$linee4_1 = str_replace('v',$dokk26,$linee4_1);
$linee4_1 = str_replace('b',$dokk27,$linee4_1);
$linee4_1 = str_replace('n',$dokk28,$linee4_1);
$linee4_1 = str_replace('m',$dokk29,$linee4_1);
$linee4_1 = str_replace('*',$dokk30,$linee4_1);
}else{
$linee4_1 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee42.txt")){
$linee4_2 = file_get_contents("keyboard/create/linee42.txt");
if($linee4_2 != null ){
$linee4_2 = str_replace('1',$dokk1,$linee4_2);
$linee4_2 = str_replace('2',$dokk2,$linee4_2);
$linee4_2 = str_replace('3',$dokk3,$linee4_2);
$linee4_2 = str_replace('q',$dokk4,$linee4_2);
$linee4_2 = str_replace('w',$dokk5,$linee4_2);
$linee4_2 = str_replace('e',$dokk6,$linee4_2);
$linee4_2 = str_replace('r',$dokk7,$linee4_2);
$linee4_2 = str_replace('t',$dokk8,$linee4_2);
$linee4_2 = str_replace('y',$dokk9,$linee4_2);
$linee4_2 = str_replace('u',$dokk10,$linee4_2);
$linee4_2 = str_replace('i',$dokk11,$linee4_2);
$linee4_2 = str_replace('o',$dokk12,$linee4_2);
$linee4_2 = str_replace('p',$dokk13,$linee4_2);
$linee4_2 = str_replace('a',$dokk14,$linee4_2);
$linee4_2 = str_replace('s',$dokk15,$linee4_2);
$linee4_2 = str_replace('d',$dokk16,$linee4_2);
$linee4_2 = str_replace('f',$dokk17,$linee4_2);
$linee4_2 = str_replace('g',$dokk18,$linee4_2);
$linee4_2 = str_replace('h',$dokk19,$linee4_2);
$linee4_2 = str_replace('j',$dokk20,$linee4_2);
$linee4_2 = str_replace('k',$dokk21,$linee4_2);
$linee4_2 = str_replace('l',$dokk22,$linee4_2);
$linee4_2 = str_replace('z',$dokk23,$linee4_2);
$linee4_2 = str_replace('x',$dokk24,$linee4_2);
$linee4_2 = str_replace('c',$dokk25,$linee4_2);
$linee4_2 = str_replace('v',$dokk26,$linee4_2);
$linee4_2 = str_replace('b',$dokk27,$linee4_2);
$linee4_2 = str_replace('n',$dokk28,$linee4_2);
$linee4_2 = str_replace('m',$dokk29,$linee4_2);
$linee4_2 = str_replace('*',$dokk30,$linee4_2);
}else{
$linee4_2 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee43.txt")){
$linee4_3 = file_get_contents("keyboard/create/linee43.txt");
if($linee4_3 != null ){
$linee4_3 = str_replace('1',$dokk1,$linee4_3);
$linee4_3 = str_replace('2',$dokk2,$linee4_3);
$linee4_3 = str_replace('3',$dokk3,$linee4_3);
$linee4_3 = str_replace('q',$dokk4,$linee4_3);
$linee4_3 = str_replace('w',$dokk5,$linee4_3);
$linee4_3 = str_replace('e',$dokk6,$linee4_3);
$linee4_3 = str_replace('r',$dokk7,$linee4_3);
$linee4_3 = str_replace('t',$dokk8,$linee4_3);
$linee4_3 = str_replace('y',$dokk9,$linee4_3);
$linee4_3 = str_replace('u',$dokk10,$linee4_3);
$linee4_3 = str_replace('i',$dokk11,$linee4_3);
$linee4_3 = str_replace('o',$dokk12,$linee4_3);
$linee4_3 = str_replace('p',$dokk13,$linee4_3);
$linee4_3 = str_replace('a',$dokk14,$linee4_3);
$linee4_3 = str_replace('s',$dokk15,$linee4_3);
$linee4_3 = str_replace('d',$dokk16,$linee4_3);
$linee4_3 = str_replace('f',$dokk17,$linee4_3);
$linee4_3 = str_replace('g',$dokk18,$linee4_3);
$linee4_3 = str_replace('h',$dokk19,$linee4_3);
$linee4_3 = str_replace('j',$dokk20,$linee4_3);
$linee4_3 = str_replace('k',$dokk21,$linee4_3);
$linee4_3 = str_replace('l',$dokk22,$linee4_3);
$linee4_3 = str_replace('z',$dokk23,$linee4_3);
$linee4_3 = str_replace('x',$dokk24,$linee4_3);
$linee4_3 = str_replace('c',$dokk25,$linee4_3);
$linee4_3 = str_replace('v',$dokk26,$linee4_3);
$linee4_3 = str_replace('b',$dokk27,$linee4_3);
$linee4_3 = str_replace('n',$dokk28,$linee4_3);
$linee4_3 = str_replace('m',$dokk29,$linee4_3);
$linee4_3 = str_replace('*',$dokk30,$linee4_3);
}else{
$linee4_3 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee44.txt")){
$linee4_4 = file_get_contents("keyboard/create/linee44.txt");
if($linee4_4 != null ){
$linee4_4 = str_replace('1',$dokk1,$linee4_4);
$linee4_4 = str_replace('2',$dokk2,$linee4_4);
$linee4_4 = str_replace('3',$dokk3,$linee4_4);
$linee4_4 = str_replace('q',$dokk4,$linee4_4);
$linee4_4 = str_replace('w',$dokk5,$linee4_4);
$linee4_4 = str_replace('e',$dokk6,$linee4_4);
$linee4_4 = str_replace('r',$dokk7,$linee4_4);
$linee4_4 = str_replace('t',$dokk8,$linee4_4);
$linee4_4 = str_replace('y',$dokk9,$linee4_4);
$linee4_4 = str_replace('u',$dokk10,$linee4_4);
$linee4_4 = str_replace('i',$dokk11,$linee4_4);
$linee4_4 = str_replace('o',$dokk12,$linee4_4);
$linee4_4 = str_replace('p',$dokk13,$linee4_4);
$linee4_4 = str_replace('a',$dokk14,$linee4_4);
$linee4_4 = str_replace('s',$dokk15,$linee4_4);
$linee4_4 = str_replace('d',$dokk16,$linee4_4);
$linee4_4 = str_replace('f',$dokk17,$linee4_4);
$linee4_4 = str_replace('g',$dokk18,$linee4_4);
$linee4_4 = str_replace('h',$dokk19,$linee4_4);
$linee4_4 = str_replace('j',$dokk20,$linee4_4);
$linee4_4 = str_replace('k',$dokk21,$linee4_4);
$linee4_4 = str_replace('l',$dokk22,$linee4_4);
$linee4_4 = str_replace('z',$dokk23,$linee4_4);
$linee4_4 = str_replace('x',$dokk24,$linee4_4);
$linee4_4 = str_replace('c',$dokk25,$linee4_4);
$linee4_4 = str_replace('v',$dokk26,$linee4_4);
$linee4_4 = str_replace('b',$dokk27,$linee4_4);
$linee4_4 = str_replace('n',$dokk28,$linee4_4);
$linee4_4 = str_replace('m',$dokk29,$linee4_4);
$linee4_4 = str_replace('*',$dokk30,$linee4_4);
}else{
$linee4_4 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee51.txt")){
$linee5_1 = file_get_contents("keyboard/create/linee51.txt");
if($linee5_1 != null ){
$linee5_1 = str_replace('1',$dokk1,$linee5_1);
$linee5_1 = str_replace('2',$dokk2,$linee5_1);
$linee5_1 = str_replace('3',$dokk3,$linee5_1);
$linee5_1 = str_replace('q',$dokk5,$linee5_1);
$linee5_1 = str_replace('w',$dokk5,$linee5_1);
$linee5_1 = str_replace('e',$dokk6,$linee5_1);
$linee5_1 = str_replace('r',$dokk7,$linee5_1);
$linee5_1 = str_replace('t',$dokk8,$linee5_1);
$linee5_1 = str_replace('y',$dokk9,$linee5_1);
$linee5_1 = str_replace('u',$dokk10,$linee5_1);
$linee5_1 = str_replace('i',$dokk11,$linee5_1);
$linee5_1 = str_replace('o',$dokk12,$linee5_1);
$linee5_1 = str_replace('p',$dokk13,$linee5_1);
$linee5_1 = str_replace('a',$dokk14,$linee5_1);
$linee5_1 = str_replace('s',$dokk15,$linee5_1);
$linee5_1 = str_replace('d',$dokk16,$linee5_1);
$linee5_1 = str_replace('f',$dokk17,$linee5_1);
$linee5_1 = str_replace('g',$dokk18,$linee5_1);
$linee5_1 = str_replace('h',$dokk19,$linee5_1);
$linee5_1 = str_replace('j',$dokk20,$linee5_1);
$linee5_1 = str_replace('k',$dokk21,$linee5_1);
$linee5_1 = str_replace('l',$dokk22,$linee5_1);
$linee5_1 = str_replace('z',$dokk23,$linee5_1);
$linee5_1 = str_replace('x',$dokk24,$linee5_1);
$linee5_1 = str_replace('c',$dokk25,$linee5_1);
$linee5_1 = str_replace('v',$dokk26,$linee5_1);
$linee5_1 = str_replace('b',$dokk27,$linee5_1);
$linee5_1 = str_replace('n',$dokk28,$linee5_1);
$linee5_1 = str_replace('m',$dokk29,$linee5_1);
$linee5_1 = str_replace('*',$dokk30,$linee5_1);
}else{
$linee5_1 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee52.txt")){
$linee5_2 = file_get_contents("keyboard/create/linee52.txt");
if($linee5_2 != null ){
$linee5_2 = str_replace('1',$dokk1,$linee5_2);
$linee5_2 = str_replace('2',$dokk2,$linee5_2);
$linee5_2 = str_replace('3',$dokk3,$linee5_2);
$linee5_2 = str_replace('q',$dokk4,$linee5_2);
$linee5_2 = str_replace('w',$dokk5,$linee5_2);
$linee5_2 = str_replace('e',$dokk6,$linee5_2);
$linee5_2 = str_replace('r',$dokk7,$linee5_2);
$linee5_2 = str_replace('t',$dokk8,$linee5_2);
$linee5_2 = str_replace('y',$dokk9,$linee5_2);
$linee5_2 = str_replace('u',$dokk10,$linee5_2);
$linee5_2 = str_replace('i',$dokk11,$linee5_2);
$linee5_2 = str_replace('o',$dokk12,$linee5_2);
$linee5_2 = str_replace('p',$dokk13,$linee5_2);
$linee5_2 = str_replace('a',$dokk14,$linee5_2);
$linee5_2 = str_replace('s',$dokk15,$linee5_2);
$linee5_2 = str_replace('d',$dokk16,$linee5_2);
$linee5_2 = str_replace('f',$dokk17,$linee5_2);
$linee5_2 = str_replace('g',$dokk18,$linee5_2);
$linee5_2 = str_replace('h',$dokk19,$linee5_2);
$linee5_2 = str_replace('j',$dokk20,$linee5_2);
$linee5_2 = str_replace('k',$dokk21,$linee5_2);
$linee5_2 = str_replace('l',$dokk22,$linee5_2);
$linee5_2 = str_replace('z',$dokk23,$linee5_2);
$linee5_2 = str_replace('x',$dokk24,$linee5_2);
$linee5_2 = str_replace('c',$dokk25,$linee5_2);
$linee5_2 = str_replace('v',$dokk26,$linee5_2);
$linee5_2 = str_replace('b',$dokk27,$linee5_2);
$linee5_2 = str_replace('n',$dokk28,$linee5_2);
$linee5_2 = str_replace('m',$dokk29,$linee5_2);
$linee5_2 = str_replace('*',$dokk30,$linee5_2);
}else{
$linee5_2 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee53.txt")){
$linee5_3 = file_get_contents("keyboard/create/linee53.txt");
if($linee5_3 != null ){
$linee5_3 = str_replace('1',$dokk1,$linee5_3);
$linee5_3 = str_replace('2',$dokk2,$linee5_3);
$linee5_3 = str_replace('3',$dokk3,$linee5_3);
$linee5_3 = str_replace('q',$dokk4,$linee5_3);
$linee5_3 = str_replace('w',$dokk5,$linee5_3);
$linee5_3 = str_replace('e',$dokk6,$linee5_3);
$linee5_3 = str_replace('r',$dokk7,$linee5_3);
$linee5_3 = str_replace('t',$dokk8,$linee5_3);
$linee5_3 = str_replace('y',$dokk9,$linee5_3);
$linee5_3 = str_replace('u',$dokk10,$linee5_3);
$linee5_3 = str_replace('i',$dokk11,$linee5_3);
$linee5_3 = str_replace('o',$dokk12,$linee5_3);
$linee5_3 = str_replace('p',$dokk13,$linee5_3);
$linee5_3 = str_replace('a',$dokk14,$linee5_3);
$linee5_3 = str_replace('s',$dokk15,$linee5_3);
$linee5_3 = str_replace('d',$dokk16,$linee5_3);
$linee5_3 = str_replace('f',$dokk17,$linee5_3);
$linee5_3 = str_replace('g',$dokk18,$linee5_3);
$linee5_3 = str_replace('h',$dokk19,$linee5_3);
$linee5_3 = str_replace('j',$dokk20,$linee5_3);
$linee5_3 = str_replace('k',$dokk21,$linee5_3);
$linee5_3 = str_replace('l',$dokk22,$linee5_3);
$linee5_3 = str_replace('z',$dokk23,$linee5_3);
$linee5_3 = str_replace('x',$dokk24,$linee5_3);
$linee5_3 = str_replace('c',$dokk25,$linee5_3);
$linee5_3 = str_replace('v',$dokk26,$linee5_3);
$linee5_3 = str_replace('b',$dokk27,$linee5_3);
$linee5_3 = str_replace('n',$dokk28,$linee5_3);
$linee5_3 = str_replace('m',$dokk29,$linee5_3);
$linee5_3 = str_replace('*',$dokk30,$linee5_3);
}else{
$linee5_3 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee54.txt")){
$linee5_4 = file_get_contents("keyboard/create/linee54.txt");
if($linee5_4 != null ){
$linee5_4 = str_replace('1',$dokk1,$linee5_4);
$linee5_4 = str_replace('2',$dokk2,$linee5_4);
$linee5_4 = str_replace('3',$dokk3,$linee5_4);
$linee5_4 = str_replace('q',$dokk4,$linee5_4);
$linee5_4 = str_replace('w',$dokk5,$linee5_4);
$linee5_4 = str_replace('e',$dokk6,$linee5_4);
$linee5_4 = str_replace('r',$dokk7,$linee5_4);
$linee5_4 = str_replace('t',$dokk8,$linee5_4);
$linee5_4 = str_replace('y',$dokk9,$linee5_4);
$linee5_4 = str_replace('u',$dokk10,$linee5_4);
$linee5_4 = str_replace('i',$dokk11,$linee5_4);
$linee5_4 = str_replace('o',$dokk12,$linee5_4);
$linee5_4 = str_replace('p',$dokk13,$linee5_4);
$linee5_4 = str_replace('a',$dokk14,$linee5_4);
$linee5_4 = str_replace('s',$dokk15,$linee5_4);
$linee5_4 = str_replace('d',$dokk16,$linee5_4);
$linee5_4 = str_replace('f',$dokk17,$linee5_4);
$linee5_4 = str_replace('g',$dokk18,$linee5_4);
$linee5_4 = str_replace('h',$dokk19,$linee5_4);
$linee5_4 = str_replace('j',$dokk20,$linee5_4);
$linee5_4 = str_replace('k',$dokk21,$linee5_4);
$linee5_4 = str_replace('l',$dokk22,$linee5_4);
$linee5_4 = str_replace('z',$dokk23,$linee5_4);
$linee5_4 = str_replace('x',$dokk24,$linee5_4);
$linee5_4 = str_replace('c',$dokk25,$linee5_4);
$linee5_4 = str_replace('v',$dokk26,$linee5_4);
$linee5_4 = str_replace('b',$dokk27,$linee5_4);
$linee5_4 = str_replace('n',$dokk28,$linee5_4);
$linee5_4 = str_replace('m',$dokk29,$linee5_4);
$linee5_4 = str_replace('*',$dokk30,$linee5_4);
}else{
$linee5_4 = "";
}}
if(file_exists("keyboard/create/linee61.txt")){
$linee6_1 = file_get_contents("keyboard/create/linee61.txt");
if($linee6_1 != null ){
$linee6_1 = str_replace('1',$dokk1,$linee6_1);
$linee6_1 = str_replace('2',$dokk2,$linee6_1);
$linee6_1 = str_replace('3',$dokk3,$linee6_1);
$linee6_1 = str_replace('q',$dokk4,$linee6_1);
$linee6_1 = str_replace('w',$dokk5,$linee6_1);
$linee6_1 = str_replace('e',$dokk6,$linee6_1);
$linee6_1 = str_replace('r',$dokk7,$linee6_1);
$linee6_1 = str_replace('t',$dokk8,$linee6_1);
$linee6_1 = str_replace('y',$dokk9,$linee6_1);
$linee6_1 = str_replace('u',$dokk10,$linee6_1);
$linee6_1 = str_replace('i',$dokk11,$linee6_1);
$linee6_1 = str_replace('o',$dokk12,$linee6_1);
$linee6_1 = str_replace('p',$dokk13,$linee6_1);
$linee6_1 = str_replace('a',$dokk14,$linee6_1);
$linee6_1 = str_replace('s',$dokk15,$linee6_1);
$linee6_1 = str_replace('d',$dokk16,$linee6_1);
$linee6_1 = str_replace('f',$dokk17,$linee6_1);
$linee6_1 = str_replace('g',$dokk18,$linee6_1);
$linee6_1 = str_replace('h',$dokk19,$linee6_1);
$linee6_1 = str_replace('j',$dokk20,$linee6_1);
$linee6_1 = str_replace('k',$dokk21,$linee6_1);
$linee6_1 = str_replace('l',$dokk22,$linee6_1);
$linee6_1 = str_replace('z',$dokk23,$linee6_1);
$linee6_1 = str_replace('x',$dokk24,$linee6_1);
$linee6_1 = str_replace('c',$dokk25,$linee6_1);
$linee6_1 = str_replace('v',$dokk26,$linee6_1);
$linee6_1 = str_replace('b',$dokk27,$linee6_1);
$linee6_1 = str_replace('n',$dokk28,$linee6_1);
$linee6_1 = str_replace('m',$dokk29,$linee6_1);
$linee6_1 = str_replace('*',$dokk30,$linee6_1);
}else{
$linee6_1 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee62.txt")){
$linee6_2 = file_get_contents("keyboard/create/linee62.txt");
if($linee6_2 != null ){
$linee6_2 = str_replace('1',$dokk1,$linee6_2);
$linee6_2 = str_replace('2',$dokk2,$linee6_2);
$linee6_2 = str_replace('3',$dokk3,$linee6_2);
$linee6_2 = str_replace('q',$dokk4,$linee6_2);
$linee6_2 = str_replace('w',$dokk5,$linee6_2);
$linee6_2 = str_replace('e',$dokk6,$linee6_2);
$linee6_2 = str_replace('r',$dokk7,$linee6_2);
$linee6_2 = str_replace('t',$dokk8,$linee6_2);
$linee6_2 = str_replace('y',$dokk9,$linee6_2);
$linee6_2 = str_replace('u',$dokk10,$linee6_2);
$linee6_2 = str_replace('i',$dokk11,$linee6_2);
$linee6_2 = str_replace('o',$dokk12,$linee6_2);
$linee6_2 = str_replace('p',$dokk13,$linee6_2);
$linee6_2 = str_replace('a',$dokk14,$linee6_2);
$linee6_2 = str_replace('s',$dokk15,$linee6_2);
$linee6_2 = str_replace('d',$dokk16,$linee6_2);
$linee6_2 = str_replace('f',$dokk17,$linee6_2);
$linee6_2 = str_replace('g',$dokk18,$linee6_2);
$linee6_2 = str_replace('h',$dokk19,$linee6_2);
$linee6_2 = str_replace('j',$dokk20,$linee6_2);
$linee6_2 = str_replace('k',$dokk21,$linee6_2);
$linee6_2 = str_replace('l',$dokk22,$linee6_2);
$linee6_2 = str_replace('z',$dokk23,$linee6_2);
$linee6_2 = str_replace('x',$dokk24,$linee6_2);
$linee6_2 = str_replace('c',$dokk25,$linee6_2);
$linee6_2 = str_replace('v',$dokk26,$linee6_2);
$linee6_2 = str_replace('b',$dokk27,$linee6_2);
$linee6_2 = str_replace('n',$dokk28,$linee6_2);
$linee6_2 = str_replace('m',$dokk29,$linee6_2);
$linee6_2 = str_replace('*',$dokk30,$linee6_2);
}else{
$linee6_2 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee63.txt")){
$linee6_3 = file_get_contents("keyboard/create/linee63.txt");
if($linee6_3 != null ){
$linee6_3 = str_replace('1',$dokk1,$linee6_3);
$linee6_3 = str_replace('2',$dokk2,$linee6_3);
$linee6_3 = str_replace('3',$dokk3,$linee6_3);
$linee6_3 = str_replace('q',$dokk4,$linee6_3);
$linee6_3 = str_replace('w',$dokk5,$linee6_3);
$linee6_3 = str_replace('e',$dokk6,$linee6_3);
$linee6_3 = str_replace('r',$dokk7,$linee6_3);
$linee6_3 = str_replace('t',$dokk8,$linee6_3);
$linee6_3 = str_replace('y',$dokk9,$linee6_3);
$linee6_3 = str_replace('u',$dokk10,$linee6_3);
$linee6_3 = str_replace('i',$dokk11,$linee6_3);
$linee6_3 = str_replace('o',$dokk12,$linee6_3);
$linee6_3 = str_replace('p',$dokk13,$linee6_3);
$linee6_3 = str_replace('a',$dokk14,$linee6_3);
$linee6_3 = str_replace('s',$dokk15,$linee6_3);
$linee6_3 = str_replace('d',$dokk16,$linee6_3);
$linee6_3 = str_replace('f',$dokk17,$linee6_3);
$linee6_3 = str_replace('g',$dokk18,$linee6_3);
$linee6_3 = str_replace('h',$dokk19,$linee6_3);
$linee6_3 = str_replace('j',$dokk20,$linee6_3);
$linee6_3 = str_replace('k',$dokk21,$linee6_3);
$linee6_3 = str_replace('l',$dokk22,$linee6_3);
$linee6_3 = str_replace('z',$dokk23,$linee6_3);
$linee6_3 = str_replace('x',$dokk24,$linee6_3);
$linee6_3 = str_replace('c',$dokk25,$linee6_3);
$linee6_3 = str_replace('v',$dokk26,$linee6_3);
$linee6_3 = str_replace('b',$dokk27,$linee6_3);
$linee6_3 = str_replace('n',$dokk28,$linee6_3);
$linee6_3 = str_replace('m',$dokk29,$linee6_3);
$linee6_3 = str_replace('*',$dokk30,$linee6_3);
}else{
$linee6_3 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee64.txt")){
$linee6_4 = file_get_contents("keyboard/create/linee64.txt");
if($linee6_4 != null ){
$linee6_4 = str_replace('1',$dokk1,$linee6_4);
$linee6_4 = str_replace('2',$dokk2,$linee6_4);
$linee6_4 = str_replace('3',$dokk3,$linee6_4);
$linee6_4 = str_replace('q',$dokk4,$linee6_4);
$linee6_4 = str_replace('w',$dokk5,$linee6_4);
$linee6_4 = str_replace('e',$dokk6,$linee6_4);
$linee6_4 = str_replace('r',$dokk7,$linee6_4);
$linee6_4 = str_replace('t',$dokk8,$linee6_4);
$linee6_4 = str_replace('y',$dokk9,$linee6_4);
$linee6_4 = str_replace('u',$dokk10,$linee6_4);
$linee6_4 = str_replace('i',$dokk11,$linee6_4);
$linee6_4 = str_replace('o',$dokk12,$linee6_4);
$linee6_4 = str_replace('p',$dokk13,$linee6_4);
$linee6_4 = str_replace('a',$dokk14,$linee6_4);
$linee6_4 = str_replace('s',$dokk15,$linee6_4);
$linee6_4 = str_replace('d',$dokk16,$linee6_4);
$linee6_4 = str_replace('f',$dokk17,$linee6_4);
$linee6_4 = str_replace('g',$dokk18,$linee6_4);
$linee6_4 = str_replace('h',$dokk19,$linee6_4);
$linee6_4 = str_replace('j',$dokk20,$linee6_4);
$linee6_4 = str_replace('k',$dokk21,$linee6_4);
$linee6_4 = str_replace('l',$dokk22,$linee6_4);
$linee6_4 = str_replace('z',$dokk23,$linee6_4);
$linee6_4 = str_replace('x',$dokk24,$linee6_4);
$linee6_4 = str_replace('c',$dokk25,$linee6_4);
$linee6_4 = str_replace('v',$dokk26,$linee6_4);
$linee6_4 = str_replace('b',$dokk27,$linee6_4);
$linee6_4 = str_replace('n',$dokk28,$linee6_4);
$linee6_4 = str_replace('m',$dokk29,$linee6_4);
$linee6_4 = str_replace('*',$dokk30,$linee6_4);
}else{
$linee6_4 = "";
}}
if(file_exists("keyboard/create/linee71.txt")){
$linee7_1 = file_get_contents("keyboard/create/linee71.txt");
if($linee7_1 != null ){
$linee7_1 = str_replace('1',$dokk1,$linee7_1);
$linee7_1 = str_replace('2',$dokk2,$linee7_1);
$linee7_1 = str_replace('3',$dokk3,$linee7_1);
$linee7_1 = str_replace('q',$dokk4,$linee7_1);
$linee7_1 = str_replace('w',$dokk5,$linee7_1);
$linee7_1 = str_replace('e',$dokk6,$linee7_1);
$linee7_1 = str_replace('r',$dokk7,$linee7_1);
$linee7_1 = str_replace('t',$dokk8,$linee7_1);
$linee7_1 = str_replace('y',$dokk9,$linee7_1);
$linee7_1 = str_replace('u',$dokk10,$linee7_1);
$linee7_1 = str_replace('i',$dokk11,$linee7_1);
$linee7_1 = str_replace('o',$dokk12,$linee7_1);
$linee7_1 = str_replace('p',$dokk13,$linee7_1);
$linee7_1 = str_replace('a',$dokk14,$linee7_1);
$linee7_1 = str_replace('s',$dokk15,$linee7_1);
$linee7_1 = str_replace('d',$dokk16,$linee7_1);
$linee7_1 = str_replace('f',$dokk17,$linee7_1);
$linee7_1 = str_replace('g',$dokk18,$linee7_1);
$linee7_1 = str_replace('h',$dokk19,$linee7_1);
$linee7_1 = str_replace('j',$dokk20,$linee7_1);
$linee7_1 = str_replace('k',$dokk21,$linee7_1);
$linee7_1 = str_replace('l',$dokk22,$linee7_1);
$linee7_1 = str_replace('z',$dokk23,$linee7_1);
$linee7_1 = str_replace('x',$dokk24,$linee7_1);
$linee7_1 = str_replace('c',$dokk25,$linee7_1);
$linee7_1 = str_replace('v',$dokk26,$linee7_1);
$linee7_1 = str_replace('b',$dokk27,$linee7_1);
$linee7_1 = str_replace('n',$dokk28,$linee7_1);
$linee7_1 = str_replace('m',$dokk29,$linee7_1);
$linee7_1 = str_replace('*',$dokk30,$linee7_1);
}else{
$linee7_1 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee72.txt")){
$linee7_2 = file_get_contents("keyboard/create/linee72.txt");
if($linee7_2 != null ){
$linee7_2 = str_replace('1',$dokk1,$linee7_2);
$linee7_2 = str_replace('2',$dokk2,$linee7_2);
$linee7_2 = str_replace('3',$dokk3,$linee7_2);
$linee7_2 = str_replace('q',$dokk4,$linee7_2);
$linee7_2 = str_replace('w',$dokk5,$linee7_2);
$linee7_2 = str_replace('e',$dokk6,$linee7_2);
$linee7_2 = str_replace('r',$dokk7,$linee7_2);
$linee7_2 = str_replace('t',$dokk8,$linee7_2);
$linee7_2 = str_replace('y',$dokk9,$linee7_2);
$linee7_2 = str_replace('u',$dokk10,$linee7_2);
$linee7_2 = str_replace('i',$dokk11,$linee7_2);
$linee7_2 = str_replace('o',$dokk12,$linee7_2);
$linee7_2 = str_replace('p',$dokk13,$linee7_2);
$linee7_2 = str_replace('a',$dokk14,$linee7_2);
$linee7_2 = str_replace('s',$dokk15,$linee7_2);
$linee7_2 = str_replace('d',$dokk16,$linee7_2);
$linee7_2 = str_replace('f',$dokk17,$linee7_2);
$linee7_2 = str_replace('g',$dokk18,$linee7_2);
$linee7_2 = str_replace('h',$dokk19,$linee7_2);
$linee7_2 = str_replace('j',$dokk20,$linee7_2);
$linee7_2 = str_replace('k',$dokk21,$linee7_2);
$linee7_2 = str_replace('l',$dokk22,$linee7_2);
$linee7_2 = str_replace('z',$dokk23,$linee7_2);
$linee7_2 = str_replace('x',$dokk24,$linee7_2);
$linee7_2 = str_replace('c',$dokk25,$linee7_2);
$linee7_2 = str_replace('v',$dokk26,$linee7_2);
$linee7_2 = str_replace('b',$dokk27,$linee7_2);
$linee7_2 = str_replace('n',$dokk28,$linee7_2);
$linee7_2 = str_replace('m',$dokk29,$linee7_2);
$linee7_2 = str_replace('*',$dokk30,$linee7_2);
}else{
$linee7_2 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee73.txt")){
$linee7_3 = file_get_contents("keyboard/create/linee73.txt");
if($linee7_3 != null ){
$linee7_3 = str_replace('1',$dokk1,$linee7_3);
$linee7_3 = str_replace('2',$dokk2,$linee7_3);
$linee7_3 = str_replace('3',$dokk3,$linee7_3);
$linee7_3 = str_replace('q',$dokk4,$linee7_3);
$linee7_3 = str_replace('w',$dokk5,$linee7_3);
$linee7_3 = str_replace('e',$dokk6,$linee7_3);
$linee7_3 = str_replace('r',$dokk7,$linee7_3);
$linee7_3 = str_replace('t',$dokk8,$linee7_3);
$linee7_3 = str_replace('y',$dokk9,$linee7_3);
$linee7_3 = str_replace('u',$dokk10,$linee7_3);
$linee7_3 = str_replace('i',$dokk11,$linee7_3);
$linee7_3 = str_replace('o',$dokk12,$linee7_3);
$linee7_3 = str_replace('p',$dokk13,$linee7_3);
$linee7_3 = str_replace('a',$dokk14,$linee7_3);
$linee7_3 = str_replace('s',$dokk15,$linee7_3);
$linee7_3 = str_replace('d',$dokk16,$linee7_3);
$linee7_3 = str_replace('f',$dokk17,$linee7_3);
$linee7_3 = str_replace('g',$dokk18,$linee7_3);
$linee7_3 = str_replace('h',$dokk19,$linee7_3);
$linee7_3 = str_replace('j',$dokk20,$linee7_3);
$linee7_3 = str_replace('k',$dokk21,$linee7_3);
$linee7_3 = str_replace('l',$dokk22,$linee7_3);
$linee7_3 = str_replace('z',$dokk23,$linee7_3);
$linee7_3 = str_replace('x',$dokk24,$linee7_3);
$linee7_3 = str_replace('c',$dokk25,$linee7_3);
$linee7_3 = str_replace('v',$dokk26,$linee7_3);
$linee7_3 = str_replace('b',$dokk27,$linee7_3);
$linee7_3 = str_replace('n',$dokk28,$linee7_3);
$linee7_3 = str_replace('m',$dokk29,$linee7_3);
$linee7_3 = str_replace('*',$dokk30,$linee7_3);
}else{
$linee7_3 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee74.txt")){
$linee7_4 = file_get_contents("keyboard/create/linee74.txt");
if($linee7_4 != null ){
$linee7_4 = str_replace('1',$dokk1,$linee7_4);
$linee7_4 = str_replace('2',$dokk2,$linee7_4);
$linee7_4 = str_replace('3',$dokk3,$linee7_4);
$linee7_4 = str_replace('q',$dokk4,$linee7_4);
$linee7_4 = str_replace('w',$dokk5,$linee7_4);
$linee7_4 = str_replace('e',$dokk6,$linee7_4);
$linee7_4 = str_replace('r',$dokk7,$linee7_4);
$linee7_4 = str_replace('t',$dokk8,$linee7_4);
$linee7_4 = str_replace('y',$dokk9,$linee7_4);
$linee7_4 = str_replace('u',$dokk10,$linee7_4);
$linee7_4 = str_replace('i',$dokk11,$linee7_4);
$linee7_4 = str_replace('o',$dokk12,$linee7_4);
$linee7_4 = str_replace('p',$dokk13,$linee7_4);
$linee7_4 = str_replace('a',$dokk14,$linee7_4);
$linee7_4 = str_replace('s',$dokk15,$linee7_4);
$linee7_4 = str_replace('d',$dokk16,$linee7_4);
$linee7_4 = str_replace('f',$dokk17,$linee7_4);
$linee7_4 = str_replace('g',$dokk18,$linee7_4);
$linee7_4 = str_replace('h',$dokk19,$linee7_4);
$linee7_4 = str_replace('j',$dokk20,$linee7_4);
$linee7_4 = str_replace('k',$dokk21,$linee7_4);
$linee7_4 = str_replace('l',$dokk22,$linee7_4);
$linee7_4 = str_replace('z',$dokk23,$linee7_4);
$linee7_4 = str_replace('x',$dokk24,$linee7_4);
$linee7_4 = str_replace('c',$dokk25,$linee7_4);
$linee7_4 = str_replace('v',$dokk26,$linee7_4);
$linee7_4 = str_replace('b',$dokk27,$linee7_4);
$linee7_4 = str_replace('n',$dokk28,$linee7_4);
$linee7_4 = str_replace('m',$dokk29,$linee7_4);
$linee7_4 = str_replace('*',$dokk30,$linee7_4);
}else{
$linee7_4 = "";
}}
if(file_exists("keyboard/create/linee81.txt")){
$linee8_1 = file_get_contents("keyboard/create/linee81.txt");
if($linee8_1 != null ){
$linee8_1 = str_replace('1',$dokk1,$linee8_1);
$linee8_1 = str_replace('2',$dokk2,$linee8_1);
$linee8_1 = str_replace('3',$dokk3,$linee8_1);
$linee8_1 = str_replace('q',$dokk4,$linee8_1);
$linee8_1 = str_replace('w',$dokk5,$linee8_1);
$linee8_1 = str_replace('e',$dokk6,$linee8_1);
$linee8_1 = str_replace('r',$dokk7,$linee8_1);
$linee8_1 = str_replace('t',$dokk8,$linee8_1);
$linee8_1 = str_replace('y',$dokk9,$linee8_1);
$linee8_1 = str_replace('u',$dokk10,$linee8_1);
$linee8_1 = str_replace('i',$dokk11,$linee8_1);
$linee8_1 = str_replace('o',$dokk12,$linee8_1);
$linee8_1 = str_replace('p',$dokk13,$linee8_1);
$linee8_1 = str_replace('a',$dokk14,$linee8_1);
$linee8_1 = str_replace('s',$dokk15,$linee8_1);
$linee8_1 = str_replace('d',$dokk16,$linee8_1);
$linee8_1 = str_replace('f',$dokk17,$linee8_1);
$linee8_1 = str_replace('g',$dokk18,$linee8_1);
$linee8_1 = str_replace('h',$dokk19,$linee8_1);
$linee8_1 = str_replace('j',$dokk20,$linee8_1);
$linee8_1 = str_replace('k',$dokk21,$linee8_1);
$linee8_1 = str_replace('l',$dokk22,$linee8_1);
$linee8_1 = str_replace('z',$dokk23,$linee8_1);
$linee8_1 = str_replace('x',$dokk24,$linee8_1);
$linee8_1 = str_replace('c',$dokk25,$linee8_1);
$linee8_1 = str_replace('v',$dokk26,$linee8_1);
$linee8_1 = str_replace('b',$dokk27,$linee8_1);
$linee8_1 = str_replace('n',$dokk28,$linee8_1);
$linee8_1 = str_replace('m',$dokk29,$linee8_1);
$linee8_1 = str_replace('*',$dokk30,$linee8_1);
}else{
$linee8_1 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee82.txt")){
$linee8_2 = file_get_contents("keyboard/create/linee82.txt");
if($linee8_2 != null ){
$linee8_2 = str_replace('1',$dokk1,$linee8_2);
$linee8_2 = str_replace('2',$dokk2,$linee8_2);
$linee8_2 = str_replace('3',$dokk3,$linee8_2);
$linee8_2 = str_replace('q',$dokk4,$linee8_2);
$linee8_2 = str_replace('w',$dokk5,$linee8_2);
$linee8_2 = str_replace('e',$dokk6,$linee8_2);
$linee8_2 = str_replace('r',$dokk7,$linee8_2);
$linee8_2 = str_replace('t',$dokk8,$linee8_2);
$linee8_2 = str_replace('y',$dokk9,$linee8_2);
$linee8_2 = str_replace('u',$dokk10,$linee8_2);
$linee8_2 = str_replace('i',$dokk11,$linee8_2);
$linee8_2 = str_replace('o',$dokk12,$linee8_2);
$linee8_2 = str_replace('p',$dokk13,$linee8_2);
$linee8_2 = str_replace('a',$dokk14,$linee8_2);
$linee8_2 = str_replace('s',$dokk15,$linee8_2);
$linee8_2 = str_replace('d',$dokk16,$linee8_2);
$linee8_2 = str_replace('f',$dokk17,$linee8_2);
$linee8_2 = str_replace('g',$dokk18,$linee8_2);
$linee8_2 = str_replace('h',$dokk19,$linee8_2);
$linee8_2 = str_replace('j',$dokk20,$linee8_2);
$linee8_2 = str_replace('k',$dokk21,$linee8_2);
$linee8_2 = str_replace('l',$dokk22,$linee8_2);
$linee8_2 = str_replace('z',$dokk23,$linee8_2);
$linee8_2 = str_replace('x',$dokk24,$linee8_2);
$linee8_2 = str_replace('c',$dokk25,$linee8_2);
$linee8_2 = str_replace('v',$dokk26,$linee8_2);
$linee8_2 = str_replace('b',$dokk27,$linee8_2);
$linee8_2 = str_replace('n',$dokk28,$linee8_2);
$linee8_2 = str_replace('m',$dokk29,$linee8_2);
$linee8_2 = str_replace('*',$dokk30,$linee8_2);
}else{
$linee8_2 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee83.txt")){
$linee8_3 = file_get_contents("keyboard/create/linee83.txt");
if($linee8_3 != null ){
$linee8_3 = str_replace('1',$dokk1,$linee8_3);
$linee8_3 = str_replace('2',$dokk2,$linee8_3);
$linee8_3 = str_replace('3',$dokk3,$linee8_3);
$linee8_3 = str_replace('q',$dokk4,$linee8_3);
$linee8_3 = str_replace('w',$dokk5,$linee8_3);
$linee8_3 = str_replace('e',$dokk6,$linee8_3);
$linee8_3 = str_replace('r',$dokk7,$linee8_3);
$linee8_3 = str_replace('t',$dokk8,$linee8_3);
$linee8_3 = str_replace('y',$dokk9,$linee8_3);
$linee8_3 = str_replace('u',$dokk10,$linee8_3);
$linee8_3 = str_replace('i',$dokk11,$linee8_3);
$linee8_3 = str_replace('o',$dokk12,$linee8_3);
$linee8_3 = str_replace('p',$dokk13,$linee8_3);
$linee8_3 = str_replace('a',$dokk14,$linee8_3);
$linee8_3 = str_replace('s',$dokk15,$linee8_3);
$linee8_3 = str_replace('d',$dokk16,$linee8_3);
$linee8_3 = str_replace('f',$dokk17,$linee8_3);
$linee8_3 = str_replace('g',$dokk18,$linee8_3);
$linee8_3 = str_replace('h',$dokk19,$linee8_3);
$linee8_3 = str_replace('j',$dokk20,$linee8_3);
$linee8_3 = str_replace('k',$dokk21,$linee8_3);
$linee8_3 = str_replace('l',$dokk22,$linee8_3);
$linee8_3 = str_replace('z',$dokk23,$linee8_3);
$linee8_3 = str_replace('x',$dokk24,$linee8_3);
$linee8_3 = str_replace('c',$dokk25,$linee8_3);
$linee8_3 = str_replace('v',$dokk26,$linee8_3);
$linee8_3 = str_replace('b',$dokk27,$linee8_3);
$linee8_3 = str_replace('n',$dokk28,$linee8_3);
$linee8_3 = str_replace('m',$dokk29,$linee8_3);
$linee8_3 = str_replace('*',$dokk30,$linee8_3);
}else{
$linee8_3 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee84.txt")){
$linee8_4 = file_get_contents("keyboard/create/linee84.txt");
if($linee8_4 != null ){
$linee8_4 = str_replace('1',$dokk1,$linee8_4);
$linee8_4 = str_replace('2',$dokk2,$linee8_4);
$linee8_4 = str_replace('3',$dokk3,$linee8_4);
$linee8_4 = str_replace('q',$dokk4,$linee8_4);
$linee8_4 = str_replace('w',$dokk5,$linee8_4);
$linee8_4 = str_replace('e',$dokk6,$linee8_4);
$linee8_4 = str_replace('r',$dokk7,$linee8_4);
$linee8_4 = str_replace('t',$dokk8,$linee8_4);
$linee8_4 = str_replace('y',$dokk9,$linee8_4);
$linee8_4 = str_replace('u',$dokk10,$linee8_4);
$linee8_4 = str_replace('i',$dokk11,$linee8_4);
$linee8_4 = str_replace('o',$dokk12,$linee8_4);
$linee8_4 = str_replace('p',$dokk13,$linee8_4);
$linee8_4 = str_replace('a',$dokk14,$linee8_4);
$linee8_4 = str_replace('s',$dokk15,$linee8_4);
$linee8_4 = str_replace('d',$dokk16,$linee8_4);
$linee8_4 = str_replace('f',$dokk17,$linee8_4);
$linee8_4 = str_replace('g',$dokk18,$linee8_4);
$linee8_4 = str_replace('h',$dokk19,$linee8_4);
$linee8_4 = str_replace('j',$dokk20,$linee8_4);
$linee8_4 = str_replace('k',$dokk21,$linee8_4);
$linee8_4 = str_replace('l',$dokk22,$linee8_4);
$linee8_4 = str_replace('z',$dokk23,$linee8_4);
$linee8_4 = str_replace('x',$dokk24,$linee8_4);
$linee8_4 = str_replace('c',$dokk25,$linee8_4);
$linee8_4 = str_replace('v',$dokk26,$linee8_4);
$linee8_4 = str_replace('b',$dokk27,$linee8_4);
$linee8_4 = str_replace('n',$dokk28,$linee8_4);
$linee8_4 = str_replace('m',$dokk29,$linee8_4);
$linee8_4 = str_replace('*',$dokk30,$linee8_4);
}else{
$linee8_4 = "";
}}
if(file_exists("keyboard/create/linee91.txt")){
$linee9_1 = file_get_contents("keyboard/create/linee91.txt");
if($linee9_1 != null ){
$linee9_1 = str_replace('1',$dokk1,$linee9_1);
$linee9_1 = str_replace('2',$dokk2,$linee9_1);
$linee9_1 = str_replace('3',$dokk3,$linee9_1);
$linee9_1 = str_replace('q',$dokk4,$linee9_1);
$linee9_1 = str_replace('w',$dokk5,$linee9_1);
$linee9_1 = str_replace('e',$dokk6,$linee9_1);
$linee9_1 = str_replace('r',$dokk7,$linee9_1);
$linee9_1 = str_replace('t',$dokk8,$linee9_1);
$linee9_1 = str_replace('y',$dokk9,$linee9_1);
$linee9_1 = str_replace('u',$dokk10,$linee9_1);
$linee9_1 = str_replace('i',$dokk11,$linee9_1);
$linee9_1 = str_replace('o',$dokk12,$linee9_1);
$linee9_1 = str_replace('p',$dokk13,$linee9_1);
$linee9_1 = str_replace('a',$dokk14,$linee9_1);
$linee9_1 = str_replace('s',$dokk15,$linee9_1);
$linee9_1 = str_replace('d',$dokk16,$linee9_1);
$linee9_1 = str_replace('f',$dokk17,$linee9_1);
$linee9_1 = str_replace('g',$dokk18,$linee9_1);
$linee9_1 = str_replace('h',$dokk19,$linee9_1);
$linee9_1 = str_replace('j',$dokk20,$linee9_1);
$linee9_1 = str_replace('k',$dokk21,$linee9_1);
$linee9_1 = str_replace('l',$dokk22,$linee9_1);
$linee9_1 = str_replace('z',$dokk23,$linee9_1);
$linee9_1 = str_replace('x',$dokk24,$linee9_1);
$linee9_1 = str_replace('c',$dokk25,$linee9_1);
$linee9_1 = str_replace('v',$dokk26,$linee9_1);
$linee9_1 = str_replace('b',$dokk27,$linee9_1);
$linee9_1 = str_replace('n',$dokk28,$linee9_1);
$linee9_1 = str_replace('m',$dokk29,$linee9_1);
$linee9_1 = str_replace('*',$dokk30,$linee9_1);
}else{
$linee9_1 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee92.txt")){
$linee9_2 = file_get_contents("keyboard/create/linee92.txt");
if($linee9_2 != null ){
$linee9_2 = str_replace('1',$dokk1,$linee9_2);
$linee9_2 = str_replace('2',$dokk2,$linee9_2);
$linee9_2 = str_replace('3',$dokk3,$linee9_2);
$linee9_2 = str_replace('q',$dokk4,$linee9_2);
$linee9_2 = str_replace('w',$dokk5,$linee9_2);
$linee9_2 = str_replace('e',$dokk6,$linee9_2);
$linee9_2 = str_replace('r',$dokk7,$linee9_2);
$linee9_2 = str_replace('t',$dokk8,$linee9_2);
$linee9_2 = str_replace('y',$dokk9,$linee9_2);
$linee9_2 = str_replace('u',$dokk10,$linee9_2);
$linee9_2 = str_replace('i',$dokk11,$linee9_2);
$linee9_2 = str_replace('o',$dokk12,$linee9_2);
$linee9_2 = str_replace('p',$dokk13,$linee9_2);
$linee9_2 = str_replace('a',$dokk14,$linee9_2);
$linee9_2 = str_replace('s',$dokk15,$linee9_2);
$linee9_2 = str_replace('d',$dokk16,$linee9_2);
$linee9_2 = str_replace('f',$dokk17,$linee9_2);
$linee9_2 = str_replace('g',$dokk18,$linee9_2);
$linee9_2 = str_replace('h',$dokk19,$linee9_2);
$linee9_2 = str_replace('j',$dokk20,$linee9_2);
$linee9_2 = str_replace('k',$dokk21,$linee9_2);
$linee9_2 = str_replace('l',$dokk22,$linee9_2);
$linee9_2 = str_replace('z',$dokk23,$linee9_2);
$linee9_2 = str_replace('x',$dokk24,$linee9_2);
$linee9_2 = str_replace('c',$dokk25,$linee9_2);
$linee9_2 = str_replace('v',$dokk26,$linee9_2);
$linee9_2 = str_replace('b',$dokk27,$linee9_2);
$linee9_2 = str_replace('n',$dokk28,$linee9_2);
$linee9_2 = str_replace('m',$dokk29,$linee9_2);
$linee9_2 = str_replace('*',$dokk30,$linee9_2);
}else{
$linee9_2 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee93.txt")){
$linee9_3 = file_get_contents("keyboard/create/linee93.txt");
if($linee9_3 != null ){
$linee9_3 = str_replace('1',$dokk1,$linee9_3);
$linee9_3 = str_replace('2',$dokk2,$linee9_3);
$linee9_3 = str_replace('3',$dokk3,$linee9_3);
$linee9_3 = str_replace('q',$dokk4,$linee9_3);
$linee9_3 = str_replace('w',$dokk5,$linee9_3);
$linee9_3 = str_replace('e',$dokk6,$linee9_3);
$linee9_3 = str_replace('r',$dokk7,$linee9_3);
$linee9_3 = str_replace('t',$dokk8,$linee9_3);
$linee9_3 = str_replace('y',$dokk9,$linee9_3);
$linee9_3 = str_replace('u',$dokk10,$linee9_3);
$linee9_3 = str_replace('i',$dokk11,$linee9_3);
$linee9_3 = str_replace('o',$dokk12,$linee9_3);
$linee9_3 = str_replace('p',$dokk13,$linee9_3);
$linee9_3 = str_replace('a',$dokk14,$linee9_3);
$linee9_3 = str_replace('s',$dokk15,$linee9_3);
$linee9_3 = str_replace('d',$dokk16,$linee9_3);
$linee9_3 = str_replace('f',$dokk17,$linee9_3);
$linee9_3 = str_replace('g',$dokk18,$linee9_3);
$linee9_3 = str_replace('h',$dokk19,$linee9_3);
$linee9_3 = str_replace('j',$dokk20,$linee9_3);
$linee9_3 = str_replace('k',$dokk21,$linee9_3);
$linee9_3 = str_replace('l',$dokk22,$linee9_3);
$linee9_3 = str_replace('z',$dokk23,$linee9_3);
$linee9_3 = str_replace('x',$dokk24,$linee9_3);
$linee9_3 = str_replace('c',$dokk25,$linee9_3);
$linee9_3 = str_replace('v',$dokk26,$linee9_3);
$linee9_3 = str_replace('b',$dokk27,$linee9_3);
$linee9_3 = str_replace('n',$dokk28,$linee9_3);
$linee9_3 = str_replace('m',$dokk29,$linee9_3);
$linee9_3 = str_replace('*',$dokk30,$linee9_3);
}else{
$linee9_3 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee94.txt")){
$linee9_4 = file_get_contents("keyboard/create/linee94.txt");
if($linee9_4 != null ){
$linee9_4 = str_replace('1',$dokk1,$linee9_4);
$linee9_4 = str_replace('2',$dokk2,$linee9_4);
$linee9_4 = str_replace('3',$dokk3,$linee9_4);
$linee9_4 = str_replace('q',$dokk4,$linee9_4);
$linee9_4 = str_replace('w',$dokk5,$linee9_4);
$linee9_4 = str_replace('e',$dokk6,$linee9_4);
$linee9_4 = str_replace('r',$dokk7,$linee9_4);
$linee9_4 = str_replace('t',$dokk8,$linee9_4);
$linee9_4 = str_replace('y',$dokk9,$linee9_4);
$linee9_4 = str_replace('u',$dokk10,$linee9_4);
$linee9_4 = str_replace('i',$dokk11,$linee9_4);
$linee9_4 = str_replace('o',$dokk12,$linee9_4);
$linee9_4 = str_replace('p',$dokk13,$linee9_4);
$linee9_4 = str_replace('a',$dokk14,$linee9_4);
$linee9_4 = str_replace('s',$dokk15,$linee9_4);
$linee9_4 = str_replace('d',$dokk16,$linee9_4);
$linee9_4 = str_replace('f',$dokk17,$linee9_4);
$linee9_4 = str_replace('g',$dokk18,$linee9_4);
$linee9_4 = str_replace('h',$dokk19,$linee9_4);
$linee9_4 = str_replace('j',$dokk20,$linee9_4);
$linee9_4 = str_replace('k',$dokk21,$linee9_4);
$linee9_4 = str_replace('l',$dokk22,$linee9_4);
$linee9_4 = str_replace('z',$dokk23,$linee9_4);
$linee9_4 = str_replace('x',$dokk24,$linee9_4);
$linee9_4 = str_replace('c',$dokk25,$linee9_4);
$linee9_4 = str_replace('v',$dokk26,$linee9_4);
$linee9_4 = str_replace('b',$dokk27,$linee9_4);
$linee9_4 = str_replace('n',$dokk28,$linee9_4);
$linee9_4 = str_replace('m',$dokk29,$linee9_4);
$linee9_4 = str_replace('*',$dokk30,$linee9_4);
}else{
$linee9_4 = "";
}}
if(file_exists("keyboard/create/linee101.txt")){
$linee10_1 = file_get_contents("keyboard/create/linee101.txt");
if($linee10_1 != null ){
$linee10_1 = str_replace('1',$dokk1,$linee10_1);
$linee10_1 = str_replace('2',$dokk2,$linee10_1);
$linee10_1 = str_replace('3',$dokk3,$linee10_1);
$linee10_1 = str_replace('q',$dokk4,$linee10_1);
$linee10_1 = str_replace('w',$dokk5,$linee10_1);
$linee10_1 = str_replace('e',$dokk6,$linee10_1);
$linee10_1 = str_replace('r',$dokk7,$linee10_1);
$linee10_1 = str_replace('t',$dokk8,$linee10_1);
$linee10_1 = str_replace('y',$dokk9,$linee10_1);
$linee10_1 = str_replace('u',$dokk10,$linee10_1);
$linee10_1 = str_replace('i',$dokk11,$linee10_1);
$linee10_1 = str_replace('o',$dokk12,$linee10_1);
$linee10_1 = str_replace('p',$dokk13,$linee10_1);
$linee10_1 = str_replace('a',$dokk14,$linee10_1);
$linee10_1 = str_replace('s',$dokk15,$linee10_1);
$linee10_1 = str_replace('d',$dokk16,$linee10_1);
$linee10_1 = str_replace('f',$dokk17,$linee10_1);
$linee10_1 = str_replace('g',$dokk18,$linee10_1);
$linee10_1 = str_replace('h',$dokk19,$linee10_1);
$linee10_1 = str_replace('j',$dokk20,$linee10_1);
$linee10_1 = str_replace('k',$dokk21,$linee10_1);
$linee10_1 = str_replace('l',$dokk22,$linee10_1);
$linee10_1 = str_replace('z',$dokk23,$linee10_1);
$linee10_1 = str_replace('x',$dokk24,$linee10_1);
$linee10_1 = str_replace('c',$dokk25,$linee10_1);
$linee10_1 = str_replace('v',$dokk26,$linee10_1);
$linee10_1 = str_replace('b',$dokk27,$linee10_1);
$linee10_1 = str_replace('n',$dokk28,$linee10_1);
$linee10_1 = str_replace('m',$dokk29,$linee10_1);
$linee10_1 = str_replace('*',$dokk30,$linee10_1);
}else{
$linee10_1 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee102.txt")){
$linee10_2 = file_get_contents("keyboard/create/linee102.txt");
if($linee10_2 != null ){
$linee10_2 = str_replace('1',$dokk1,$linee10_2);
$linee10_2 = str_replace('2',$dokk2,$linee10_2);
$linee10_2 = str_replace('3',$dokk3,$linee10_2);
$linee10_2 = str_replace('q',$dokk4,$linee10_2);
$linee10_2 = str_replace('w',$dokk5,$linee10_2);
$linee10_2 = str_replace('e',$dokk6,$linee10_2);
$linee10_2 = str_replace('r',$dokk7,$linee10_2);
$linee10_2 = str_replace('t',$dokk8,$linee10_2);
$linee10_2 = str_replace('y',$dokk9,$linee10_2);
$linee10_2 = str_replace('u',$dokk10,$linee10_2);
$linee10_2 = str_replace('i',$dokk11,$linee10_2);
$linee10_2 = str_replace('o',$dokk12,$linee10_2);
$linee10_2 = str_replace('p',$dokk13,$linee10_2);
$linee10_2 = str_replace('a',$dokk14,$linee10_2);
$linee10_2 = str_replace('s',$dokk15,$linee10_2);
$linee10_2 = str_replace('d',$dokk16,$linee10_2);
$linee10_2 = str_replace('f',$dokk17,$linee10_2);
$linee10_2 = str_replace('g',$dokk18,$linee10_2);
$linee10_2 = str_replace('h',$dokk19,$linee10_2);
$linee10_2 = str_replace('j',$dokk20,$linee10_2);
$linee10_2 = str_replace('k',$dokk21,$linee10_2);
$linee10_2 = str_replace('l',$dokk22,$linee10_2);
$linee10_2 = str_replace('z',$dokk23,$linee10_2);
$linee10_2 = str_replace('x',$dokk24,$linee10_2);
$linee10_2 = str_replace('c',$dokk25,$linee10_2);
$linee10_2 = str_replace('v',$dokk26,$linee10_2);
$linee10_2 = str_replace('b',$dokk27,$linee10_2);
$linee10_2 = str_replace('n',$dokk28,$linee10_2);
$linee10_2 = str_replace('m',$dokk29,$linee10_2);
$linee10_2 = str_replace('*',$dokk30,$linee10_2);
}else{
$linee10_2 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee103.txt")){
$linee10_3 = file_get_contents("keyboard/create/linee103.txt");
if($linee10_3 != null ){
$linee10_3 = str_replace('1',$dokk1,$linee10_3);
$linee10_3 = str_replace('2',$dokk2,$linee10_3);
$linee10_3 = str_replace('3',$dokk3,$linee10_3);
$linee10_3 = str_replace('q',$dokk4,$linee10_3);
$linee10_3 = str_replace('w',$dokk5,$linee10_3);
$linee10_3 = str_replace('e',$dokk6,$linee10_3);
$linee10_3 = str_replace('r',$dokk7,$linee10_3);
$linee10_3 = str_replace('t',$dokk8,$linee10_3);
$linee10_3 = str_replace('y',$dokk9,$linee10_3);
$linee10_3 = str_replace('u',$dokk10,$linee10_3);
$linee10_3 = str_replace('i',$dokk11,$linee10_3);
$linee10_3 = str_replace('o',$dokk12,$linee10_3);
$linee10_3 = str_replace('p',$dokk13,$linee10_3);
$linee10_3 = str_replace('a',$dokk14,$linee10_3);
$linee10_3 = str_replace('s',$dokk15,$linee10_3);
$linee10_3 = str_replace('d',$dokk16,$linee10_3);
$linee10_3 = str_replace('f',$dokk17,$linee10_3);
$linee10_3 = str_replace('g',$dokk18,$linee10_3);
$linee10_3 = str_replace('h',$dokk19,$linee10_3);
$linee10_3 = str_replace('j',$dokk20,$linee10_3);
$linee10_3 = str_replace('k',$dokk21,$linee10_3);
$linee10_3 = str_replace('l',$dokk22,$linee10_3);
$linee10_3 = str_replace('z',$dokk23,$linee10_3);
$linee10_3 = str_replace('x',$dokk24,$linee10_3);
$linee10_3 = str_replace('c',$dokk25,$linee10_3);
$linee10_3 = str_replace('v',$dokk26,$linee10_3);
$linee10_3 = str_replace('b',$dokk27,$linee10_3);
$linee10_3 = str_replace('n',$dokk28,$linee10_3);
$linee10_3 = str_replace('m',$dokk29,$linee10_3);
$linee10_3 = str_replace('*',$dokk30,$linee10_3);
}else{
$linee10_3 = "";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee104.txt")){
$linee10_4 = file_get_contents("keyboard/create/linee104.txt");
if($linee10_4 != null ){
$linee10_4 = str_replace('1',$dokk1,$linee10_4);
$linee10_4 = str_replace('2',$dokk2,$linee10_4);
$linee10_4 = str_replace('3',$dokk3,$linee10_4);
$linee10_4 = str_replace('q',$dokk4,$linee10_4);
$linee10_4 = str_replace('w',$dokk5,$linee10_4);
$linee10_4 = str_replace('e',$dokk6,$linee10_4);
$linee10_4 = str_replace('r',$dokk7,$linee10_4);
$linee10_4 = str_replace('t',$dokk8,$linee10_4);
$linee10_4 = str_replace('y',$dokk9,$linee10_4);
$linee10_4 = str_replace('u',$dokk10,$linee10_4);
$linee10_4 = str_replace('i',$dokk11,$linee10_4);
$linee10_4 = str_replace('o',$dokk12,$linee10_4);
$linee10_4 = str_replace('p',$dokk13,$linee10_4);
$linee10_4 = str_replace('a',$dokk14,$linee10_4);
$linee10_4 = str_replace('s',$dokk15,$linee10_4);
$linee10_4 = str_replace('d',$dokk16,$linee10_4);
$linee10_4 = str_replace('f',$dokk17,$linee10_4);
$linee10_4 = str_replace('g',$dokk18,$linee10_4);
$linee10_4 = str_replace('h',$dokk19,$linee10_4);
$linee10_4 = str_replace('j',$dokk20,$linee10_4);
$linee10_4 = str_replace('k',$dokk21,$linee10_4);
$linee10_4 = str_replace('l',$dokk22,$linee10_4);
$linee10_4 = str_replace('z',$dokk23,$linee10_4);
$linee10_4 = str_replace('x',$dokk24,$linee10_4);
$linee10_4 = str_replace('c',$dokk25,$linee10_4);
$linee10_4 = str_replace('v',$dokk26,$linee10_4);
$linee10_4 = str_replace('b',$dokk27,$linee10_4);
$linee10_4 = str_replace('n',$dokk28,$linee10_4);
$linee10_4 = str_replace('m',$dokk29,$linee10_4);
$linee10_4 = str_replace('*',$dokk30,$linee10_4);
}else{
$linee10_4 = "";
}}

//////////------------------------\\\\\\\\\\\\\\
?>