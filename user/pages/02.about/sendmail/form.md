---
title: 'Contact Form'
form:
    name: contact
    fields:
        name:
            label: Tên
            placeholder: 'Nhập tên của bạn'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        email:
            label: Email
            placeholder: 'Nhập Email của bạn'
            type: email
            validate:
                required: true
        message:
            label: 'Tin nhắn'
            placeholder: 'Nhập tin nhắn của bạn'
            type: textarea
            validate:
                required: true
    buttons:
        submit:
            type: submit
            value: 'Giữi Mail'
        reset:
            type: reset
            value: 'Xóa hết nội dung'
    process:
        save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: '{% include ''forms/data.txt.twig'' %}'
        email:
            subject: '[Site Contact Form] {{ form.value.name|e }}'
            body: '{% include ''forms/data.html.twig'' %}'
        message: 'Thank you for getting in touch!'
        display: thankyou
---

# Contact
#### <p> Giữi mail cho tôi nếu bạn có điều gì đó muốn trao đổi với tôi!</p>