<?php

// فانکشن نمایش پیام به صورت بوت استرپ
function error_empity($arg,$type,$alert){
	if(empty($alert)){
		echo '<div class="alert alert-danger">';
	}else{
		echo '<div class="alert alert-'.$alert.'">';
	}
	if($type=="alert"){
		echo "خطا ! <strong>$arg</strong>";
	}elseif($type=="done"){
		echo $arg;
	}else{
		echo "پر نمودن فیلد <strong>$arg</strong> الزامی می باشد !";
	}
	echo "</div>";
}


// کد خطاهای زرین پال
switch ($bazgashti) {
    case "-1":
        error_empity('اطلاعات ارسال شده ناقص است','alert','danger');
        break;
	case "-2":
        error_empity('IP و يا مرچنت كد پذيرنده صحيح نيست','alert','danger');
        break;
	case "-3":
        error_empity('با توجه به محدوديت هاي شاپرك امكان پرداخت با رقم درخواست شده ميسر نمي باشد','alert','danger');
        break;
	case "-4":
        error_empity('سطح تاييد پذيرنده پايين تر از سطح نقره اي است','alert','danger');
        break;
	case "-11":
        error_empity('درخواست مورد نظر يافت نشد','alert','danger');
        break;
	case "-12":
        error_empity('امكان ويرايش درخواست ميسر نمي باشد','alert','danger');
        break;
	case "-21":
        error_empity('هيچ نوع عمليات مالي براي اين تراكنش يافت نشد','alert','danger');
        break;
	case "-22":
        error_empity('تراكنش نا موفق مي باشد','alert','danger');
        break;
	case "-33":
        error_empity('رقم تراكنش با رقم پرداخت شده مطابقت ندارد','alert','danger');
        break;
	case "-34":
        error_empity('سقف تقسيم تراكنش از لحاظ تعداد يا رقم عبور نموده است','alert','danger');
        break;
	case "-40":
        error_empity('اجازه دسترسي به متد مربوطه وجود ندارد','alert','danger');
        break;
	case "-41":
        error_empity('اطلاعات ارسال شده مربوط به AdditionalData غيرمعتبر مي باشد .','alert','danger');
        break;
	case "-42":
        error_empity('مدت زمان معتبر طول عمر  شناسه  پرداخت بايد بين 30دقيه تا 45روز مي باش','alert','danger');
        break;
	case "-54":
        error_empity('درخواست مورد نظر آرشيو شده است .','alert','warning');
        break;
	case "101":
        error_empity('عمليات پرداخت موفق بوده وقبلا PaymentVerification تراكنش انجام شده است','alert','info');
        break;
	case "100":
        error_empity('عملیات با موفقیت انجام شد','alert','success');
        break;
}
