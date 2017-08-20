$(document).ready(function () {
    function getBaseURL() {
        var url = location.href;  // entire url including querystring - also: window.location.href;
        var baseURL = url.substring(0, url.indexOf('/', 14));
        if (baseURL.indexOf('http://localhost') != -1) {
            // Base Url for localhost
            var url = location.href;  // window.location.href;
            var pathname = location.pathname;  // window.location.pathname;
            var index1 = url.indexOf(pathname);
            var index2 = url.indexOf("/", index1 + 1);
            var baseLocalUrl = url.substr(0, index2);
            return baseLocalUrl + "/";
        }
        else {
            // Root Url for domain name
            return baseURL + "/";
        }

    }
    var API_KEY = 'AIzaSyBgs4pfBrI0cGQlAmCKqNd-bRcH4zBICHs';

// Specify the URL you want PageSpeed results for here:
    var URL_TO_GET_RESULTS_FOR = 'https://developers.google.com/speed/pagespeed/insights/';
    $.ajax({
        type: "GET",
        url: getBaseURL() + "phan_tich",
        dataType: 'json',
        success: function (data) {
            if (data.success) {
                // alert(data.data);

                setTimeout(
                    function() {
                        $('.test-class').css('color','red');
                    }, 5000);
                console.log(data.data);
            }
        }
    });
});