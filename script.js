$(document).ready(function () {

  filter_data();

  function filter_data() {
    var minimum_price = $('#minimum_price').val();
    var maximum_price = $('#maximum_price').val();

    $('#minimum_price').on('input', function () {
      minimum_price = $('#minimum_price').val();
      filter_data();
    });

    $('#maximum_price').on('input', function () {
      maximum_price = $('#maximum_price').val();
      filter_data();
    });

    var color = get_filter('color');
    var material = get_filter('material');
    var country = get_filter('country');
    
    $.ajax({
      url: "fetch_data.php",
      method: "GET",
      data: { minimum_price: minimum_price, maximum_price: maximum_price, color: color, material: material, country: country },
      success: function (data) {
        $('.filter_data').html(data);
      }
    });
  }

  function get_filter(class_name) {
    var filter = [];
    $('.' + class_name + ':checked').each(function () {
      filter.push($(this).val());
    });
    return filter;
  }

  $('.common_selector').on('click', function () { filter_data(); });

});
