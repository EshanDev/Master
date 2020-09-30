<div class="auth container-fluid">
    <div class="content">
        <div class="content-header">
            <div class="text-center">
                <div>ยืนยันรหัสลงทะเบียน</div>
            </div>
        </div>

        <div class="content-body">
            <div class="verify-registration-code-form">
                <form action="{{ route('verify.reg.code') }}" method="POST" id="verify_form"  autocomplete="off">
                    @csrf
                    <fieldset class="border rounded">
                        <legend class="w-auto">ตรวจสอบรหัสลงทะเบียน</legend>
                        <div class="form-group">
                            <label for="registration_code" class="label">รหัสลงทะเบียน</label>
                            <input type="text" class="form-control serials"
                                   name="registration_code"
                                   id="registration_code"
                                   placeholder="ABCD-ABCD-ABCD-ABCD-ABCD"
                                   onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'ABCD-ABCD-ABCD-ABCD-ABCD'">
                        </div>
                        <div class="form-group">
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


            $('.serials').mask('AAAA-BBBB-CCCC-DDDD-EEEE', {'translation': {
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
