 <!-- Libs JS -->
    <script src="{{asset('tabler/dist/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <!-- Tabler Core -->
    <script src="{{asset('tabler/dist/js/tabler.min.js')}}"></script>
    <script src="{{asset('tabler/dist/js/jquery.min.js')}}"></script>
   
    {{-- Logout --}}
    <script>
      $('#logout').click(function(e){
       
        e.preventDefault()
        $.ajax({
          type: 'POST',
          url: 'logout',
          data:{
            '_token': "{{ csrf_token() }}"
          },
          success: function(response){
            window.location.href = '/'
          },
        })
      })
    </script>
    @stack('extra-scripts')