<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-alpha.24
* @link https://tabler.io
* Copyright 2018-2021 The Tabler Authors
* Copyright 2018-2021 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  {{-- Head --}}
  @include('components.templates.partials.head')
  
  <body class="antialiased">
    <div class="page">
    
    {{-- Sidebar --}}
    @include('components.templates.partials.sidebar')
    
      <div class="content">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title">
                  {{$title ?? 'Dashboard'}}
                </h2>
              </div>
              
            </div>
          </div>
          <div class="row row-deck row-cards">
            <x-forms.alert/>
            {{$slot}}
            {{-- Logout --}}
              <div class="modal modal-blur fade" id="logoutModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-status bg-danger"></div>
                    <div class="modal-body text-center py-4">
                      
                      <h3>Are you sure?</h3>
                      <div class="text-muted">Do you really want to Logout? </div>
                    </div>
                    <div class="modal-footer">
                      <div class="w-100">
                        <div class="row">
                          <div class="col"><button type="button" class="btn btn-white w-100" data-bs-dismiss="modal">
                              Cancel
                            </a></div>
                          <div class="col"><button type="button" id="logout" class="btn btn-danger w-100" data-bs-dismiss="modal">
                              Logout
                            </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

          </div>
        </div>
        
        {{-- Footer --}}
        @include('components.templates.partials.footer')

      </div>
    </div>
  
   @include('components.templates.partials.scripts')
        
  </body>
</html>



