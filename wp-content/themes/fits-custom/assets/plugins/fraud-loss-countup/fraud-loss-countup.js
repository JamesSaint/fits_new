/* Copyright 2015 James Saint
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.licences.jamessaint.com/money-count-up
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

var startDate;
var endDate;

$(document).ready(function() {
    function UpdateDollarz() {
        startDate = new Date('1/1/2015 00:00:01 AM GMT').getTime();
        endDate = new Date().getTime();
        var fraudvalue = Math.floor((endDate - startDate) / 1000) * 549;
        $('#dollar-figure').text('$' + fraudvalue.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,"));
    };
    setInterval(function() {
        UpdateDollarz();
    }, 1000);
});
