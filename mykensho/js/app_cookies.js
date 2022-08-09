var today = new Date();
var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 30 days

function setCookie(name, value) {
    document.cookie = name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
}

function getCookie(name) {
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (value != null) ? unescape(value[1]) : null;
}

function getCookieWithDefault(name, defaultValue) {
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (value != null) ? unescape(value[1]) : defaultValue;
}

var expired = new Date(today.getTime() - 24 * 3600 * 1000); // less 24 hours
function deleteCookie(name) {
    document.cookie = name + "=null; path=/; expires=" + expired.toGMTString();
}

function readCookie(name) {
    var c = document.cookie.split('; '),
        cookies = {},
        i, C;

    for (i = c.length - 1; i >= 0; i--) {
        C = c[i].split('=');
        cookies[C[0]] = C[1];
    }

    currentLang = cookies[name];

    if (currentLang != undefined && currentLang != '') {
        currentLang = currentLang.replace("undefined", "");
        currentLang = currentLang.replace("en", "");
        currentLang = currentLang.replace(/\//g, '');
        setCookie("currentLang", currentLang);
        setCookie("requiredLanguage", currentLang);
    } else {
        setCookie("currentLang", "en");
        setCookie("requiredLanguage", "en");
    }
}


function getEducationFilterCookies() {
    var educationFilter = {
        occupationId: getCookieWithDefault("occupationId", 'null'),
        program_levels: getCookieWithDefault('program_levels', 'null'),
        post_inputs: getCookieWithDefault('program_duration', 'null'),
        program_duration: getCookieWithDefault('program_duration', 'null'),
        countryId: getCookieWithDefault("edu_countryId", '0'),
        stateId: getCookieWithDefault("edu_stateId", '0'),
        cityId: getCookieWithDefault("edu_cityId", '0')
    }

    if (educationFilter.occupationId) {
        educationFilter.occupationId = educationFilter.occupationId.trim()
    }

    return educationFilter;
}

function getWorkAreaFilterCookies() {
    var workAreaFilter = {
        workAreaId: getCookieWithDefault("workAreaId", 'null'),
        specializedField: 'null',
        programLevel: getCookieWithDefault('program_levels', 'null'),
        duration: getCookieWithDefault('program_duration', 'null'),
        countryId: getCookieWithDefault("edu_countryId", '0'),
        stateId: getCookieWithDefault("edu_stateId", '0'),
        cityId: getCookieWithDefault("edu_cityId", '0'),
        areaOfStudy: 'null'
    }

    if (workAreaFilter.workAreaId) {
        workAreaFilter.workAreaId = workAreaFilter.workAreaId.trim();
    }

    return workAreaFilter;
}

function getSpecializationFilterCookies() {
    var specializationFilter = {
        specializedField: 'null',
        programLevel: getCookieWithDefault('program_levels', 'null'),
        duration: getCookieWithDefault('program_duration', 'null'),
        countryId: getCookieWithDefault("edu_countryId", '0'),
        stateId: getCookieWithDefault("edu_stateId", '0'),
        cityId: getCookieWithDefault("edu_cityId", '0'),
        areaOfStudy: 'null'
    }
    return specializationFilter;
}


function getUgProgramsFilterCookies() {

    var SpecializationArea = getCookie("SpecializationArea");
    if (SpecializationArea) {
        SpecializationArea = SpecializationArea.replace(/\//g, '@');
    }

    var ugProgramsFilter = {
        specializedOccupationId: getCookie("specializedOccupationId"),
        specializationArea: SpecializationArea,
        programLevel: getCookieWithDefault('program_levels', 'null'),
        duration: getCookieWithDefault('ug_program_duration', 'null'),
        countryId: getCookieWithDefault("ug_countryId", '0'),
        stateId: getCookieWithDefault("ug_stateId", '0'),
        cityId: getCookieWithDefault("ug_cityId", '0'),
        areaOfStudy: 'null'
    }
    return ugProgramsFilter;
}

function getPgProgramsFilterCookies() {

    var SpecializationArea = getCookie("SpecializationArea");
    if (SpecializationArea) {
        SpecializationArea = SpecializationArea.replace(/\//g, '@');
    }

    var ugProgramsFilter = {
        specializedOccupationId: getCookie("specializedOccupationId"),
        specializationArea: SpecializationArea,
        programLevel: getCookieWithDefault('program_levels', 'null'),
        duration: getCookieWithDefault('pg_program_duration', 'null'),
        countryId: getCookieWithDefault("pg_countryId", '0'),
        stateId: getCookieWithDefault("pg_stateId", '0'),
        cityId: getCookieWithDefault("pg_cityId", '0'),
        areaOfStudy: 'null'
    }
    return ugProgramsFilter;
}


//forming request Object before AJAX call
function formRequestObject(searchText) {

    var defaultId = '0';
    var explorationRequest = {
        "industryId": getCookieWithDefault("filter_industry", defaultId),
        "occupationsId": getCookieWithDefault("filter_Occupation", defaultId),
        "studyPathwayId": getCookieWithDefault("filter_study_pathways", defaultId),
        "clusterPathwayId": getCookieWithDefault("filter_carreer_pathways", defaultId),
        "searchText": getCookieWithDefault("filter_search_text_input", ""),
        "studentId": getCookie("studentId"),
        "filterOrder": '',
        "assessmentId": getCookie("assessmentId"),
        "riasecLetter": '',
        "specializedRoleIdList": getCookieWithDefault("filter_specializedroleId_List", defaultId),
        "version": GetHomeVersion()
    };
    return explorationRequest;
}

function GetHomeVersion() {
    return getCookieWithDefault("IsNewHomeVersion", 'V1')
    //    return "V2";
}




//Below Code Used to Disable the Browser Back Button
//owner : vasantharajan
//Date : 14/Feb/2017

(function (global) {
    if (true) {
        if (typeof (global) === "undefined") {
            throw new Error("window is undefined");
        }

        var _hash = "!";
        var noBackPlease = function () {
            global.location.href += "#";

            // making sure we have the fruit available for juice (^__^)
            global.setTimeout(function () {
                global.location.href += "!";
            }, 50);
        };

        global.onhashchange = function () {
            if (global.location.hash !== _hash) {
                global.location.hash = _hash;
            }
        };

        global.onload = function () {
            noBackPlease();

            // disables backspace on page except on input fields and textarea..
            document.body.onkeydown = function (e) {
                var elm = e.target.nodeName.toLowerCase();
                if (e.which === 8 && (elm !== 'input' && elm !== 'textarea')) {
                    e.preventDefault();
                }
                // stopping event bubbling up the DOM tree..
                e.stopPropagation();
            };
        }
    }
})(window);
