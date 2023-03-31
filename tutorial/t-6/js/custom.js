$("#userForm").validate({
    rules:{
        name:{
            required: true,
            minlength: 3
        },
        email: {
            required: true,
            email: true
        },
        url:{
            required: true,
            url: true
        },
        password:{
            required: true,
            minlength: 5
        },
        confirm_password:{
            required: true,
            equalTo: '#password'
        },
    },
    messages:{
        name:{
            required: 'The Name field is required',
            minlength: 'You must enter at least 3 characters'
        },
        email: {
            required: 'The Email field is required',
            email: 'You must enter a valid email address'
        },
        password:{
            required: 'The Password field is required',
            minlength: 'You must enter at least 5 characters'
        },
        Age:{
            required: 'The Confirm password field is required'
        },
        DOB:{
            required: 'The Confirm password field is required'
        },
         Country:{
            required: 'The Confirm password field is required'
        },
        State:{
            required: 'The Confirm password field is required'
        },
        City:{
            required: 'The Confirm password field is required'
        },
        Profilepic:{
            required: 'The Confirm password field is required'
        },
    },
    submitHandler: function(form){
        alert("Submitted");
        form.submit();
    }
})