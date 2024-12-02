	<!-- ================== BEGIN core-js ================== -->
	<script src="{{ asset('../assets/js/vendor.min.js')}}"></script>
	<script src="{{ asset('../assets/js/app.min.js')}}"></script>
	<!-- ================== END core-js ================== -->
	
	<!-- ================== BEGIN page-js ================== -->
	<script src="{{ asset('../assets/plugins/lity/dist/lity.min.js')}}"></script>
  <!--
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script src="{{ asset('../assets/js/demo/timeline.demo.js')}}"></script>
	<script src="{{ asset('../assets/plugins/@ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}"></script>
  -->
  <!-- required files -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('../assets/plugins/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
<script src="{{ asset('../assets/plugins/x-editable-bs4/dist/bootstrap4-editable/js/bootstrap-editable.min.js')}}"></script>
<script src="{{ asset('../assets/plugins/x-editable-bs4/dist/inputs-ext/address/address.js')}}"></script>
<script src="{{ asset('../assets/plugins/x-editable-bs4/dist/inputs-ext/typeaheadjs/lib/typeahead.js')}}"></script>
<script src="{{ asset('../assets/plugins/x-editable-bs4/dist/inputs-ext/typeaheadjs/typeaheadjs.js')}}"></script>
<script src="{{ asset('../assets/plugins/x-editable-bs4/dist/inputs-ext/wysihtml5/wysihtml5.js')}}"></script>
<script src="{{ asset('../assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{ asset('../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('../assets/plugins/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{ asset('../assets/plugins/select2/dist/js/select2.full.min.js')}}"></script>
<script src="{{ asset('../assets/plugins/jquery-mockjax/dist/jquery.mockjax.min.js')}}"></script>
<script src="{{ asset('../assets/plugins/moment/min/moment.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.6.2/cropper.min.js"></script>
<script src="{{ asset('../assets/plugins/dropzone/dist/min/dropzone.min.js')}}"></script>




<!-- html -->


<!-- script -->
<script>
  $.fn.editable.defaults.mode = 'inline';
  $.fn.editable.defaults.inputclass = 'form-control input-sm';
  $.fn.editable.defaults.url = '/post';
  
  $('#username').editable();
</script>
<script>
    function openReplyBox() {
      var replyBox = document.querySelector('.reply-box');
      if (replyBox.style.display === 'none') {
        replyBox.style.display = 'block';
      } else {
        replyBox.style.display = 'none';
      }
    }
    </script>