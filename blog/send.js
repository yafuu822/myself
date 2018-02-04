jQuery(function($) {
  $('#btn').click(function() {
    alert("クリックされました");
    $.ajax({
        type: 'post',
        url: 'post.php',
        data: {
          'kita': 'gawa'
        },
        success: function(data){
          alert(data);
        }
      });
  });
});
