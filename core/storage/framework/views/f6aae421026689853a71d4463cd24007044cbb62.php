<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="icon" href="<?php echo e(asset ('core/awais/register/public/Princess/dist/favicon.ico')); ?>">
    <title>cloud miners ~Register</title>
    <link href="<?php echo e(asset ('core/awais/register/public/Princess/dist/css/chunk-vendors.a206291a.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset ('core/awais/register/public/Princess/dist/css/app.b95358ff.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('core/awais/register/public/Princess/dist/css/chunk-47a14544.1bde5e14.css')); ?>">
    <style>
        #app .loading-box-h {
            width: 29.333333vw;
            height: 26.333333vw;
        }

        * {
            user-select: none;
        }

        .top-bg-signup[data-v-652d2876] {
            background: linear-gradient(#6eb14547, transparent);
        }
    </style>
</head>

<body class="">
    <form action="<?php echo e(route ('user.register')); ?>" method="post">
    <?php echo csrf_field(); ?>
        <div id="app">
            <div id="nava"></div>
            <div data-v-652d2876="" class="login">
                <div data-v-652d2876="" class="title van-nav-bar van-hairline--bottom">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left" onclick="window.location.href='<?php echo e(route ('user.login')); ?>'"><i class="van-icon van-icon-arrow-left van-nav-bar__arrow"></i></div>
                        <div class="van-nav-bar__title van-ellipsis">Sign up</div>
                    </div>
                </div>
                <div data-v-652d2876="" class="top-bg-signup">
                    <div data-v-652d2876="" class="left">
                        <p data-v-652d2876="">Sign up</p>
                        <p data-v-652d2876="">Register and log in to get cash rewards</p>
                    </div>
                </div>
                <div data-v-652d2876="" class="login-form form-box" style="margin-top: -110px;">
                    <div data-v-652d2876="" class="login-one-box">
                        <div data-v-652d2876="" class="login-tip"><img data-v-652d2876="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAVJJREFUWEft2DtLxEAUBeBvxcJG0MbSRrASW3sbRRAfreBP8Mf4EwRbVxF8NPbWWgk2ljYKNhaiMpCFEPNadhPDMlNm7tx7cuaeTOb0FI85rGGmJGYcU5+4x3tesl5BhV2cYHYcCGrk+MAhzrOxeQADcy8tghtgCiAXs0zmAdzEdbLqGHc1GBglZB1HSYJQ+zadLA/gTorqsNUXo1Svsba0XgQYGYw9SBRJDR2UhkQGI4NZBuJRl2EkiiSKJIqkogcmWySXeB5VBRXrl7CdxPy5YuT98u/hrGFQRen30R/m0tQ2zloMppv2AFcNo9zC6TBbHM/i/ziLVxAcgoHofhJH4rFGezT+HZzGK+YzYN6wgK8ufKgfEFhMj/BstQsMBgzBQ1zGVALoG08I3l/VaHyLqwBUzU8ewA3cJK/dSX+w8w5rIK/THvWgqTvt8lcpr7X5XzJnnSkdxA0+AAAAAElFTkSuQmCC"
                                alt=""><span data-v-652d2876="">Phone number</span></div>
                        <div data-v-652d2876="" class="register-cell van-cell-group van-hairline--top-bottom">
                            <div data-v-652d2876="" class="cell-group-color van-cell van-cell--large van-field van-field--label-left focus-cell">
                                <div class="van-field__left-icon">
                                    <div data-v-652d2876="" class="areacode">
                                        <p data-v-652d2876="">+92</p>
                                    </div>
                                </div>
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body"><input type="text" inputmode="decimal" name="username" placeholder="Enter your phone number" class="van-field__control"></div>
                                </div>
                            </div>
                        </div>
                        <div data-v-652d2876="" class="login-tip" style="margin-top: 20px;"><img data-v-652d2876="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAApJJREFUWEft2EvITVEUB/DfR4kBeaRMRBiIFEoeUYqiEAkpQ8VMJibKRGSihFImBh4T79eAkoGJR4pkIuQZySMjzzxaX/vWubf7ufvcBwZ31x2ce9b+r//5773XXmv1+M9HT5v4DcEkjMA3PMUj/GoVvxWC/bEWGzEH8Vwcb3Ace/CkWaLNEgy1jmB6huOv2Jl+PzPsq0yaITgf5zE4IX3BRVzDKwzCZKzAxIK300nx72VIliUYyt0okDuJTXhdx2lgr8EBDE/vD2F9pwjGHrtVWNZd2JrhbAKuYnSyXYkzGfN6TcoouA5HE3AotzrXSfqo6xiAB+nEZ+3HMgRjj81D7LlxfSzrnzjvTdshbBYkVRt+Yy7BiHMfUigpq16FRByc++lhN7Y0ZFdiiWchlihGHIr9OeB1bN6lYH4Zi3MwchVckkJJYK7CqRzwOjb3MAW3MSMHI5fgcpxNgBHfzuWA17G5g6m4i2k5GF2CNSp1FQxB/vkeXJgC6cDC8ozHsvR8AY9zNngdm7iNRuItjhXeR974Aofxvjiv9pBEWpRzvzbJr+G0yIYit3xWsSwSHJuy4NrEsyFqmw2qMp4iwaWI5YuxASdqHFdsW03jQ4AfdbAjU4rMpyqIFwm2Kxg3K2jdENQlWELOjisYNUpkOjdxpQSximnHCW7DdnzG0FQfl+HZcYJR/25OjIbhYxl26BLsKthqoP7vFYzr8SBeYgyy6t7CQer4IQlfc/EQ0dkqO/4KwbKkivZdgq2oF3MbKrgIl5KXfbm9k1ZZpfn9UptuVGrvza6XUcf9+bzQ+2uT79IwOxD3eu+orUmiYovCpdI9LY3e4oTo2UT/8FNfBOP/UHImilVdi34bTq9UdbEPq8Zv66a1KaHaZvAAAAAASUVORK5CYII="
                                alt=""><span data-v-652d2876="">Password</span></div>
                        <div data-v-652d2876="" class="register-cell van-cell-group van-hairline--top-bottom">
                            <div data-v-652d2876="" class="van-cell van-cell--large van-field">
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body"><input type="password" placeholder="Please enter password" name="password" class="van-field__control">
                                        <div class="van-field__right-icon">
                                            <div data-v-652d2876="" class="change-type"><i data-v-652d2876="" class="van-icon van-icon-closed-eye">
                                            </i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-v-652d2876="" class="login-tip" style="margin-top: 20px;"><img data-v-652d2876="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAApJJREFUWEft2EvITVEUB/DfR4kBeaRMRBiIFEoeUYqiEAkpQ8VMJibKRGSihFImBh4T79eAkoGJR4pkIuQZySMjzzxaX/vWubf7ufvcBwZ31x2ce9b+r//5773XXmv1+M9HT5v4DcEkjMA3PMUj/GoVvxWC/bEWGzEH8Vwcb3Ace/CkWaLNEgy1jmB6huOv2Jl+PzPsq0yaITgf5zE4IX3BRVzDKwzCZKzAxIK300nx72VIliUYyt0okDuJTXhdx2lgr8EBDE/vD2F9pwjGHrtVWNZd2JrhbAKuYnSyXYkzGfN6TcoouA5HE3AotzrXSfqo6xiAB+nEZ+3HMgRjj81D7LlxfSzrnzjvTdshbBYkVRt+Yy7BiHMfUigpq16FRByc++lhN7Y0ZFdiiWchlihGHIr9OeB1bN6lYH4Zi3MwchVckkJJYK7CqRzwOjb3MAW3MSMHI5fgcpxNgBHfzuWA17G5g6m4i2k5GF2CNSp1FQxB/vkeXJgC6cDC8ozHsvR8AY9zNngdm7iNRuItjhXeR974Aofxvjiv9pBEWpRzvzbJr+G0yIYit3xWsSwSHJuy4NrEsyFqmw2qMp4iwaWI5YuxASdqHFdsW03jQ4AfdbAjU4rMpyqIFwm2Kxg3K2jdENQlWELOjisYNUpkOjdxpQSximnHCW7DdnzG0FQfl+HZcYJR/25OjIbhYxl26BLsKthqoP7vFYzr8SBeYgyy6t7CQer4IQlfc/EQ0dkqO/4KwbKkivZdgq2oF3MbKrgIl5KXfbm9k1ZZpfn9UptuVGrvza6XUcf9+bzQ+2uT79IwOxD3eu+orUmiYovCpdI9LY3e4oTo2UT/8FNfBOP/UHImilVdi34bTq9UdbEPq8Zv66a1KaHaZvAAAAAASUVORK5CYII="
                                alt=""><span data-v-652d2876="">Re-enter the password</span></div>
                        <div data-v-652d2876="" class="register-cell van-cell-group van-hairline--top-bottom">
                            <div data-v-652d2876="" class="van-cell van-cell--large van-field">
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body"><input type="password" placeholder="Please enter password" name="password_confirmation" class="van-field__control">
                                        <div class="van-field__right-icon">
                                            <div data-v-652d2876="" class="change-type"><i data-v-652d2876="" class="van-icon van-icon-closed-eye">
                                            </i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-v-652d2876="" class="login-tip" style="margin-top: 20px;"><img data-v-652d2876="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAA7RJREFUWEfN2WnIrVMUB/DfNU8ZkjkkypChKJkiRYkkKeLDDfeaIqEQUj4oM4nMZSrKUCJJyRSKyBDKGJlCZpmn/td69NzznuF5znvTWZ9Oz95r7f9ee81ngRmnBcsI38rYARvgF7yNj5aF7PkC3Brn4TCsNgDoDVyDW/DntGDnA/AUXI5obxy9UBf4eBqQ0wI8C5e0DnwJ9+N9rIHdcUT9zrZ83wOf9wU5DcA98RSWx084EXcOOXjD+r5frT2KA/4PgM+Vhv7GIXhozKEr4YnSXrYFYIB2pr4a3A4x/tC9OLzDSdvjVSyHe+rpO7D9u6UvwJNwXUk/EI90POl57IovKhR1ZOsP8GKcXdI3RVfPTKhZVHwJRz93RdhXgzMPcOafeOadJKYz02EmAGc+UAfkmbh0VlNdg2umi4UG5EyXW+1YO7MFa9eEMPW+vplk3EGRlTT2G36fGtEA43wApihN+ZSwsw02qoolR6ROfBevVLn1IL6eBnRfgKtiMU7FVj0O/BUPILk8oDtTH4CH4mqkimnTN3gNH+AHrIj1SqvRbOrAhlLk3lFx9MsuKLsAjNauxbEtgd/iNtyF9CN/jThsXRxcpdZerT2f4Sg8OQnkJIDrIPbTCI8DXFEN03eThA+s71MvsFN9j6xj6pIjRY0DuDoew27F/U6V+L1saODkFXAh0hXm7PTLR1b7MBTkOID3VT8bxpTsB+GrCVoLgD86aPZo3IzsjwPlhV4cxjcKYFrJ64vhdeyNOMM4SnsZc3gW+3cAeRxuLE2+hx0rPC3FOgzg+ngLa5dX7oI87ySKbZ5Rm9bC95MYcANOqH0X4dxBnmEAr8TptTHxLvOVLnQVTquNca54+iSKnb+JzaqR2mJw+jAIcE18ijBGa9v2GPxMAzAXWIjb6yZxoPPbtxoEmNYwLWIoDVKeYBTFaWLsMfRQxm9b1u+HW/k4rek5+HGEoPAnyG+CDxEtJqAvoUGASUcZZ8SzMlsZ90wRuvmkN6z1BPlbx+zNICqhJ7QzXh4FMAk99vM0EljH0QU4uaXBZJxmFJcg3mghGkw2yYVG0b54vBZjx0mpczQYFTeTgstaN+qoJNPaYOTH5pPH86IxsYSgOQBTNj1T3+P6N3VFVvvmAzAiPsHGlb3+i6NtG0xt1wyDMrXK9KoPzRdgpmYZDCRrNel1KSfJYsZkoST0xKc+dHxlhphJnGdUhTNKZiqj5OW7q9KZ88T5EJChvuCaQ5NTEz97j3qxSg06M7nIPwVL6B8SZNEpXSpOKwAAAABJRU5ErkJggg=="
                                alt=""><span data-v-652d2876="">Invitation code[Not Required]</span></div>
                        <div data-v-652d2876="" class="register-cell van-cell-group van-hairline--top-bottom">
                            <div data-v-652d2876="" class="van-cell van-cell--large van-field van-field--disabled">
                                <div class="van-cell__value van-cell__value--alone van-field__value">
                                    <div class="van-field__body"><input type="text" name="referBy" value="<?php echo e(session()->get('inviteCode')); ?>" placeholder="Please enter the invitation code" class="van-field__control" readonly></div>
                                </div>
                            </div>
                        </div>
                        <div data-v-652d2876="" class="login-tip" style="margin-top: 20px;"><img data-v-652d2876="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAABSRJREFUWEftmGXIZUUYx39rt66imNhiYH2wxVZcO1HXxhbBFkXFAAMLA3dNbLFQXFSM3Q+LKAYKdmNjd7f8Xp55mXece869970LIj5f7rlnZp75z5P/OWP4l8uYAeCbGVgSmA+YA5ge+B74Bngb+HY0e/QDcEFga2BDYF1giQBVw/EX8AnwNDAVeBB4qRfA3QLUKjsDBwKbNADqZu/ngRuAq4Hv2ha0AXR8X+AUYOlC2Z/AC8BzwOvAx+HaP8LVunwZYEVgTWCWYv3XwGXAebGuirUJ4OrARGCtbOWv4aZbgYeBr9osEOPG6frAbsAuwNhs3QfAMcCdNV01gL47GjgbULHyQ4C9GPiwS1Cdps0OHAAcByyWTdLtR5TWLAEKyImeVDHI7whlnnSQMhtwInB85v4XgXHA8F45QMGZZRsFCmPkkADYCdhMwNqA4WC8zROBf3IP7l8VuA1YPjZ5H9gUeMP/OUCzc0pMejNO4m9NNgAOBnYAdFkpxwIXZS+dY0l6PMKlnO/47VG+HLs83D0C4KzATQH6UOCzysarAcahNbAmvwHvATtGhqc598RhPgXOBK4AzPZcZgAuBLaIwz9aWrApvqYDTo1yoyLF+HwSuBtQ2auAYVGTu6KOpjEtuSfwTtOm3QLUsibKNhmwe4HTowa27eG4Oo6MpJg7FnwObAs80aSgrVCbOA9E91CPbt8fuL8bVJU5CwE3Z/rs2Zs3gWwDqDJdobwCbBkx1gmfoWBbNBab5phAWlTRkmt0cncTQIvpNaHEbLYT2PhzEZCu3x1YD1gU8J1MxhZ4H3BdgCgBm2wJpDFpZSgTZ0QW5woWiKC3JdlF7KUvFzusA1wJrNzibtefFT03B+BBbJfWPMUuYnkZIZ0sqAtsd8pRwCXFuoNC2YzxXuLwTBzil7CkFk0J4TTByIiMuyTGpKHjPEvQUmWdrAF0sv3W4mk1X6Ew/R4R6FrAUqMLrW3vFocwwfaOnj5/jAlyq0Kf7e6cGD88ev6wqhpAOZ9cTbFg68YkklMplsz598hoE6lJFo+sXykmnQScmy2YKwyizqcK9lSNQWvcdoCukj3nxTfP6prrOwEVpKxaSxqTHtTsTWIH2ys8sgjwURqoWfDL4GtS9EQcnK9yXW/c2UEkCbmYUBuHdZ8FZCa5GLdXxYsTgPOzwfHALfF/V8DOMyQlwIUzvndBUKE01xN6UmWf7Nn/+wGXAnPGuLFpC/R9Sgpj0jJljJeHXw54LdaeEV2qClD2nFpPGbCeWJKpWO8Scd0MeCjqX2G0IRplUiWxK8n3rJNSsyTStp9Cx7Vx96kCtCZNjlV2EKl9kuvjfmItS4TBMSmaVM33HkBLyErMfi25LPBWKDHhpGmKFvUKkURLJ9pl4a8C1MXGjnEmCc35oDFirKg0XQVU8gUwb5BdraNY71Ic+ay7FQuxnlEE82MG0Pk7AYfllaOWJKa9Na6kTp0AmpXSdxlPuipIAKx5Su6JJoBi0e0jLmJtZCE74FCW1Sw4KID5XsPP/wPswcX/fQvKDeWIfq3KWUovMWjx98ZnHzexmohttcxUzRwvrWt+bfCGdmM2sReAfqaz4Fs7/azSKr0kSU2Z638G7ARmue1Q8Q78WDxvD0xqRdJhwmgB2uYeCd1ywtPiWb1+EdONXld1aV8yGoAWY8mq9EhGvUqvHye7QdwvwBTsaQ+vBPLDgUu/AG1r8jYtNyHA/eNGNgi0/QL066kfjrwueumZZtIvwGkGqFT8N0CwMjhCljBgAAAAAElFTkSuQmCC"
                                alt=""><span data-v-652d2876="">Touch with fingers</span></div>
                        <div data-v-652d2876="" class="v-code-wrap flex">
                            <div data-v-652d2876="" class="register-cell van-cell-group van-hairline--top-bottom">
                                <div data-v-652d2876="" class="van-cell van-cell--large van-field">
                                    <div class="van-cell__value van-cell__value--alone van-field__value">
                                        <div class="van-field__body"><input type="text" placeholder="Touch me" onclick="touchMe()" name="touch" style="filter: blur(1px)" readonly class="van-field__control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br data-v-652d2876="">
                        <div data-v-652d2876="" class="ssss">
                            <div data-v-652d2876="" role="checkbox" tabindex="0" aria-checked="true" class="van-checkbox" s-color="#FFFFFF">
                                <div class="van-checkbox__icon van-checkbox__icon--round van-checkbox__icon--checked"><i class="van-icon van-icon-success" style="border-color: rgb(12, 210, 239); background-color: rgb(12, 210, 239);">
                                </i></div>
                                <span class="van-checkbox__label"><p data-v-652d2876="">I have read and accept the</p><p
                                    data-v-652d2876="" style="color: rgb(12, 210, 239);"> Privacy Agreement </p></span>
                            </div>
                        </div>
                        <button data-v-652d2876="" onclick="loginAuthUser()" class="registerBtn sign-btn van-button van-button--default van-button--normal van-button--block">
                        <div data-v-652d2876="" class="van-button__content"><span data-v-652d2876=""
                                                                                  class="van-button__text"> Sign up</span>
                        </div>
                    </button>
                    </div>
                </div>
                <div data-v-652d2876="" class="kk"></div>
            </div>
            <div class="van-overlay" style="background: rgba(0, 0, 0, 0); display: none;">
                <div class="loading-box-h">
                    <div class="van-loading van-loading--spinner van-loading--vertical"><span class="van-loading__spinner van-loading__spinner--spinner" style="width: 30px; height: 30px;"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span><span class="van-loading__text">Loading...</span></div>
                </div>
            </div>
        </div>
    </form>



    <div class="van-toast van-toast--middle loadingcss" style="z-index: 2001; display: none;"><i class="van-icon van-toast__icon"><img src="https://gobike880.com/public/Princess/dist/img/loading.e2df1b5d.gif" class="van-icon__image">
    </i></div>
 
    <script>
    </script>
    <script>
        function touchMe() {
            document.querySelector('input[name="touch"]').value = '3466'
        }

        function loginAuthUser() {
            document.querySelector('.van-overlay').style.display = 'block'
            document.querySelector('form').submit();
        }
    </script>
</body>

</html>

<?php echo $__env->make('partials.notify', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       
             
           <?php /**PATH /home/upagexy3/ye-sundemoweb.pro/v68/core/resources/views/templates/basic/user/auth/register.blade.php ENDPATH**/ ?>