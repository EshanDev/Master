<div class="auth container-fluid">
    <div class="content">
        <div class="content-header">
            <div class="text-center">
                <div>ยืนยันรหัสลงทะเบียน</div>
            </div>
        </div>

        <div class="content-body">
            <div class="verify-registration-code-form">
                <form action="{{ url('auth/verify') }}" method="POST" id="verify_form"  autocomplete="off">
                    @csrf
                    <fieldset class="border rounded">
                        <legend class="w-auto">ตรวจสอบรหัสลงทะเบียน</legend>
                        <div class="form-group">

                            <input type="text" class="form-control serials"
                                   name="registration_code"
                                   id="registration_code"
                                   placeholder="ABCDE-ABCDE-ABCDE-ABCDE-ABCDE"
                                   onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'ABCDE-ABCDE-ABCDE-ABCDE-ABCDE'">
                            <span id="success" class="success-message">รหัสลงทะเบียนถูกต้อง <i class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary text-center w-auto m-auto">ลงทะเบียน</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

@section('script')
    <script>
        $(document).ready(function(){


            $('.serials').mask('AAAAA-BBBBB-CCCCC-DDDDD-EEEEE', {'translation': {
                    A: {pattern: /[A-Za-z0-9]/},
                    B: {pattern: /[A-Za-z0-9]/},
                    C: {pattern: /[A-Za-z0-9]/},
                    D: {pattern: /[A-Za-z0-9]/},
                    E: {pattern: /[A-Za-z0-9]/},
                }
            })

        });
    </script>
@endsection
