
                    @if (Session::has('success'))

                        <!-- <script type='text/javascript'>

                        toastr.options = {
                          "closeButton": true,
                          "debug": false,
                          "newestOnTop": false,
                          "positionClass": "toast-top-right",
                          "onclick": null,
                          "timeOut": "5000",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }

                        toastr.success( "@foreach (Session::get('success') as $succes){{ $succes }} <br /> @endforeach")
                        </script> -->
                        <script type="text/javascript">
                              swal({
                                title:"@foreach (Session::get('success') as $succes){{ $succes }} \n @endforeach",
                              text: "I will close in 5 seconds.",
                              timer: 5000,
                              type: "success",
                              showConfirmButton: false
                            });
                        </script>

                    @endif


                    @if (count($errors) > 0)

                        <!-- <script type='text/javascript'>

                        toastr.options = {
                          "closeButton": true,
                          "debug": false,
                          "newestOnTop": false,
                          "positionClass": "toast-top-right",
                          "onclick": null,
                          "timeOut": "5000",
                          "showMethod": "fadeIn",
                          "hideMethod": "fadeOut"
                        }

                        toastr.error(" @foreach ($errors->all() as $error){{ $error }} <br /> @endforeach",'Error!')
                        </script> -->
                        <script type="text/javascript">
                        swal({
                            title:"เกิดข้อผิดพลาด",
                            text: "@foreach ($errors->all() as $error){{ $error }} \n @endforeach",
                            timer: 5000,
                            type: "warning",
                            showConfirmButton: false
                          });
                        </script>
                    @endif



                      <script type='text/javascript'>
                        var class_ = '.clickSpin';
                        setTimeout(function(){
                          $(class_).each(function(){
                            $(this).click();
                          })
                        },50);
                        </script>
