import $ from 'jquery';
import 'select2';
import 'select2/dist/css/select2.min.css';

$(document).ready(function () {
    $('.select2').select2({
        placeholder: 'Select Product Size',
        width: 'resolve',
        allowClear: true,
    });
});


