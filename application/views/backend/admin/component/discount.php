
<script>
  $('input[name="discount-applicable"]').on('change', function() {
    if ($(this).val() === "yes") {
      $('#discount-type-group').show();
      $('#discount-percentage-group').show();
    } else {
      $('#discount-type-group').hide();
      $('#discount-percentage-group').hide();
    }
  });
</script>