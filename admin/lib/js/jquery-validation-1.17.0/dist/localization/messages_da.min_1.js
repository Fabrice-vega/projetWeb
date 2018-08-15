/*! jQuery Validation Plugin - v1.17.0 - 7/29/2017
 * https://jqueryvalidation.org/
 * Copyright (c) 2017 Jörn Zaefferer; Licensed MIT */
!function(a){"function"==typeof define&&define.amd?define(["jquery","../jquery.validate.min"],a):"object"==typeof module&&module.exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){return a.extend(a.validator.messages,{required:"Dette felt er påkrævet.",maxlength:a.validator.format("Indtast højst {0} tegn."),minlength:a.validator.format("Indtast mindst {0} tegn."),rangelength:a.validator.format("Indtast mindst {0} og højst {1} tegn."),email:"Indtast en gyldig email-adresse.",url:"Indtast en gyldig URL.",date:"Indtast en gyldig dato.",number:"Indtast et tal.",digits:"Indtast kun cifre.",equalTo:"Indtast den samme værdi igen.",range:a.validator.format("Angiv en værdi mellem {0} og {1}."),max:a.validator.format("Angiv en værdi der højst er {0}."),min:a.validator.format("Angiv en værdi der mindst er {0}."),creditcard:"Indtast et gyldigt kreditkortnummer."}),a});