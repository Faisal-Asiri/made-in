<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اين صنعت ؟</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body><div class="logo"><img src="images/barcode.gif" alt="" srcset="" id="logo"></div> <center>
<div class="alert alert-primary" role="alert">
  <h4 class="alert-heading">مرحبا بك في نظام اين صنعت ؟</h4>
  <p>لإستخدام النظام قم بإدخال اول ثلاثة ارقام من الرمز الشريطي للمنتج</p>
  <hr>
  <p class="mb-0">ثم انقر على زر البحث</p>
</div>
<img src="images/9859.jpg" alt="" srcset="" id="homeimg">
    
    <form  method="POST">
<input type="text" pattern="\d*" maxlength="3" minlength="3" name="barcode" autofocus require class="input-group-prepend">
<input type="submit" value="ابحث" name="submit" class="btn btn-primary">
</form>
<?php
if (isset($_POST["submit"])) {
    echo'<div class="alert alert-primary" role="alert">';
    $barcode =$_POST['barcode'];
    if($barcode <= '019'){
        echo"متوافق مع UPC-A للولايات المتحدة الأمريكية وكندا";
 
   }
   if(in_array($barcode, range("020", "029"))){
    echo"متوافق مع UPC-A - يستخدم لإصدار أرقام تداول مقيدة داخل منطقة جغرافية";
   }
   if(in_array($barcode, range("030", "039"))){
    echo"متوافق مع UPC-A - أدوية الولايات المتحدة ";
   }
   if(in_array($barcode, range("040", "049"))){
    echo"متوافق مع UPC-A - يستخدم لإصدار أرقام تداول مقيدة داخل الشركة";
   }
   if(in_array($barcode, range("050", "059"))){
    echo"متوافق مع UPC-A - GS1 US محجوز للاستخدام في المستقبل";
   }
   if(in_array($barcode, range("060", "099"))){
    echo"متوافق مع UPC-A - الولايات المتحدة وكندا";
   }
   if(in_array($barcode, range("100", "139"))){
    echo"الولايات المتحدة";
   }
   if(in_array($barcode, range("200", "299"))){
    echo"يستخدم لإصدار رقم الإعارة المقيد GS1 داخل منطقة جغرافية";
   }
   if(in_array($barcode, range("300", "379"))){
    echo"فرنسا وموناكو";
   }
   if($barcode==380){
    echo"بلغاريا";
   }
   if($barcode==383){
    echo"سلوفينيا";
   }
   if($barcode==385){
    echo"كرواتيا";
   }
   if($barcode==387){
    echo"البوسنة والهرسك";
   }
   if($barcode==389){
    echo"الجبل الأسود";
   }
   if($barcode==390){
    echo"كوسوفو";
   }
   if(in_array($barcode, range("400", "440"))){
    echo"ألمانيا (رمز 440 موروثًا من ألمانيا الشرقية السابقة عند إعادة التوحيد في عام 1990)";
   }
   if(in_array($barcode, range("450", "459"))){
    echo"اليابان (نطاق رقم المقالة الياباني الجديد)";
   }
   if(in_array($barcode, range("460", "469"))){
    echo"روسيا (رموز شريطية موروثة من الاتحاد السوفيتي)";
   }
   if($barcode==470){
    echo"قيرغيزستان";
   }
   if($barcode==471){
    echo"تايوان";
   }
   if($barcode==474){
    echo"إستونيا";
   }
   if($barcode==475){
    echo"لاتفيا";
   }
   if($barcode==476){
    echo"اذربيجان";
   }
   if($barcode==477){
    echo"ليتوانيا";
   }
   if($barcode==478){
    echo"اوزباكستان";
   }
   if($barcode==479){
    echo"سيريلانكا";
   }
   if($barcode==480){
    echo"الفلبين";
   }
   if($barcode==481){
    echo"بيلاروسيا";
   }
   if($barcode==482){
    echo"اوكرانيا";
   }
   if($barcode==483){
    echo"تركمانستان";
   }
   if($barcode==484){
    echo"مولدوفا";
   }
   if($barcode==485){
    echo"ارمينيا";
   }
   if($barcode==486){
    echo"جورجيا";
   }
   if($barcode==487){
    echo"كازاخستان";
   }
   if($barcode==488){
    echo"طاجيكستان";
   }
   if($barcode==489){
    echo"هونج كونج";
   }
   if(in_array($barcode, range("490", "499"))){
    echo"اليابان (نطاق رقم المقالة الياباني الأصلي)";
   }
   if(in_array($barcode, range("500", "505"))){
    echo"المملكة المتحدة";
   }
   if(in_array($barcode, range("520", "521"))){
    echo"اليونان";
   }
   if($barcode==528){
    echo"لبنان";
   }
   if($barcode==529){
    echo"قبرص";
   }
   if($barcode==530){
    echo"البانيا";
   }
   if($barcode==531){
    echo"مقدونيا الشمالية";
   }
   if($barcode==535){
    echo"مالطا";
   }
   if($barcode==539){
    echo"أيرلندا";
   }
   if(in_array($barcode, range("540", "549"))){
    echo"بلجيكا ولوكسمبورغ";
   }
   if($barcode==560){
    echo"البرتغال";
   }
   if($barcode==569){
    echo"أيسلندا";
   }
   if(in_array($barcode, range("570", "579"))){
    echo"الدنمارك وجزر فارو وجرينلاند";
   }
   if($barcode==590){
    echo"بولندا";
   }
   if($barcode==594){
    echo"رومانيا";
   }
   if($barcode==599){
    echo"هنغاريا";
   }
   if(in_array($barcode, range("600", "601"))){
    echo"جنوب افريقيا";
   }
   if($barcode==603){
    echo"غانا";
   }
   if($barcode==604){
    echo"السينغال";
   }
   if($barcode==608){
    echo"البحرين";
   }
   if($barcode==609){
    echo"موريشيوس";
   }
   if($barcode==609){
    echo"موريشيوس";
   }
   if($barcode==611){
    echo"المغرب";
   }
   if($barcode==613){
    echo"الجزائر";
   }
   if($barcode==615){
    echo"نيجيريا";
   }
   if($barcode==616){
    echo"كينيا";
   }
   if($barcode==617){
    echo"الكاميرون";
   }
   if($barcode==618){
    echo"ساحل العاج";
   }
   if($barcode==619){
    echo"تونس";
   }
   if($barcode==620){
    echo"ننزانيا";
   }
   if($barcode==621){
    echo"سوريا";
   }
   if($barcode==622){
    echo"مصر";
   }
   if($barcode==623){
    echo"بروناي";
   }
   if($barcode==624){
    echo"ليبيا";
   }
   if($barcode==625){
    echo"الاردن";
   }
   if($barcode==626){
    echo"ايران";
   }
   if($barcode==627){
    echo"الكويت";
   }
   if($barcode==628){
    echo"المملكة العربية السعودبة";
   }
   if($barcode==629){
    echo"الإمارات";
   }
   if($barcode==630){
    echo"قطر";
   }
   if($barcode==631){
    echo"ناميبيا";
   }
   if(in_array($barcode, range("640", "649"))){
    echo"فنلندا";
   }
   if(in_array($barcode, range("690", "699"))){
    echo"الصين";
   }
   if(in_array($barcode, range("700", "709"))){
    echo"النرويج";
   }
   if($barcode==729){
    echo"اسرائيل";
   }
   if(in_array($barcode, range("730", "739"))){
    echo"السويد";
   }
   if($barcode==740){
    echo"غواتيمالا";
   }
   if($barcode==741){
    echo"السيلفادور";
   }
   if($barcode==742){
    echo"هيندوراس";
   }
   if($barcode==743){
    echo"نيكاراغوا";
   }
   if($barcode==744){
    echo"كوستا ريكا";
   }
   if($barcode==745){
    echo"بنما";
   }
   if($barcode==746){
    echo"جمهورية الدومينيكان";
   }
   if($barcode==750){
    echo"المكسيك";
   }
   if(in_array($barcode, range("754", "755"))){
    echo"كندا";
   }
   if($barcode==759){
    echo"فنزويلا";
   }
   if(in_array($barcode, range("760", "769"))){
    echo"سويسرا وليختنشتاين";
   }
   if(in_array($barcode, range("770", "771"))){
    echo"كولومبيا";
   }
   if($barcode==773){
    echo"الاورغواي";
   }
   if($barcode==775){
    echo"البيرو";
   }
   if($barcode==777){
    echo"بوليفيا";
   }
   if(in_array($barcode, range("778", "779"))){
    echo"الارجنتين";
   }
   if($barcode==780){
    echo"تشيلي";
   }
   if($barcode==784){
    echo"البرغواي";
   }
   if($barcode==786){
    echo"الإكوادور";
   }
   if(in_array($barcode, range("789", "790"))){
    echo"البرازيل";
   }
   if(in_array($barcode, range("800", "839"))){
    echo"إيطاليا وسان مارينو ومدينة الفاتيكان";
   }
   if(in_array($barcode, range("840", "849"))){
    echo"إسبانيا وأندورا";
   }
   if($barcode==850){
    echo"كوبا";
   }
   if($barcode==858){
    echo"سلوفاكيا";
   }
   if($barcode==859){
    echo"جمهورية التشيك (رمز شريطي موروث من تشيكوسلوفاكيا)";
   }
   if($barcode==860){
    echo"صربيا (الرمز الشريطي موروث من يوغوسلافيا وصربيا والجبل الأسود)";
   }
   if($barcode==865){
    echo"منغوليا";
   }
   if($barcode==867){
    echo"كوريا الشمالية";
   }
   if($barcode==867){
    echo"كوريا الشمالية";
   }
   if(in_array($barcode, range("868", "869"))){
    echo"تركيا";
   }
   if(in_array($barcode, range("870", "879"))){
    echo"هولندا";
   }
   if($barcode==880){
    echo"كوريا الجنوبية";
   }
   if($barcode==883){
    echo"مينمار";
   }
   if($barcode==884){
    echo"كمبوديا";
   }
   if($barcode==885){
    echo"تايلند";
   }
   if($barcode==888){
    echo"سانغفورا";
   }
   if($barcode==890){
    echo"الهند";
   }
   if($barcode==893){
    echo"فيتنام";
   }
   if($barcode==896){
    echo"باكستان";
   }
   if($barcode==899){
    echo"اندونيسيا";
   }
   if(in_array($barcode, range("900", "919"))){
    echo"النمسا";
   }
   if(in_array($barcode, range("930", "939"))){
    echo"استراليا";
   }
   if(in_array($barcode, range("940", "949"))){
    echo"نيوزلاندا";
   }
   if($barcode==950){
    echo"GS1 Global Office: تطبيقات خاصة";
   }
   if($barcode==951){
    echo"تُستخدم لإصدار أرقام المدير العام لمخطط المعرف العام (GID) EPC على النحو المحدد في معيار بيانات علامة EPC";
   }
   if($barcode==952){
    echo"تستخدم للعروض التوضيحية وأمثلة لنظام GS1";
   }
   if($barcode==955){
    echo"ماليزيا";
   }
   if($barcode==958){
    echo"ماكاو";
   }
   if(in_array($barcode, range("960", "961"))){
    echo"GS1 UK Office: تخصيصات GTIN-8";
   }
   if(in_array($barcode, range("962", "969"))){
    echo"GS1 Global Office: تخصيصات GTIN-8";
   }
   if($barcode==977){
    echo"المنشورات المسلسلة (ISSN)";
   }
   if(in_array($barcode, range("978", "979"))){
    echo'"Bookland" (ISBN) - يستخدم 979-0 للموسيقى الورقية ("Musicland" ، ISMN-13 ، يحل محل أرقام ISMN M المهملة)';
   }
   if($barcode==980){
    echo"إيصالات الاسترداد";
   }
   if(in_array($barcode, range("981", "984"))){
    echo'تحديد قسيمة GS1 لمناطق العملات المشتركة';
   }
   if(in_array($barcode, range("990", "999"))){
    echo'تحديد قسيمة GS1';
   }
   echo'</div>';
}

?>
<hr>
  <p class="mb-0"  >برمجة وتصميم فيصل عسيري @f_i4i faisalasiri.site</p>
</body>
</html>