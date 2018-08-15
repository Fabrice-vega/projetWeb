/*! jQuery Validation Plugin - v1.17.0 - 7/29/2017
 * https://jqueryvalidation.org/
 * Copyright (c) 2017 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){return a.extend(a.validator.messages,{required:"تکمیل این فیلد اجباری است.",remote:"لطفا این فیلد را تصحیح کنید.",email:".لطفا یک ایمیل صحیح وارد کنید",url:"لطفا آدرس صحیح وارد کنید.",date:"لطفا یک تاریخ صحیح وارد کنید",dateFA:"لطفا یک تاریخ صحیح وارد کنید",dateISO:"لطفا تاریخ صحیح وارد کنید (ISO).",number:"لطفا عدد صحیح وارد کنید.",digits:"لطفا تنها رقم وارد کنید",creditcard:"لطفا کریدیت کارت صحیح وارد کنید.",equalTo:"لطفا مقدار برابری وارد کنید",extension:"لطفا مقداری وارد کنید که ",maxlength:a.validator.format("لطفا بیشتر از {0} حرف وارد نکنید."),minlength:a.validator.format("لطفا کمتر از {0} حرف وارد نکنید."),rangelength:a.validator.format("لطفا مقداری بین {0} تا {1} حرف وارد کنید."),range:a.validator.format("لطفا مقداری بین {0} تا {1} حرف وارد کنید."),max:a.validator.format("لطفا مقداری کمتر از {0} وارد کنید."),min:a.validator.format("لطفا مقداری بیشتر از {0} وارد کنید."),minWords:a.validator.format("لطفا حداقل {0} کلمه وارد کنید."),maxWords:a.validator.format("لطفا حداکثر {0} کلمه وارد کنید.")}),a});