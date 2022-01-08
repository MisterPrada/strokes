<template>
    <form ref="contactForm" id="contact-form" @submit.prevent="sendContactFrom" method="post">
        <div class="form-group">
            <span>&nbsp;</span>
            <input required v-model="name" type="text" minlength="3" maxlength="60" :placeholder="__('slide_contact_name') + '*'" name="firstname">
        </div>

        <div class="form-group">
            <span>&nbsp;</span>
            <input required v-model="email" type="email" :placeholder="__('slide_contact_email') + '*'" name="email">
        </div>

        <div class="form-group">
            <span>&nbsp;</span>
            <textarea required minlength="10" maxlength="7000" v-model="message" type="text" :placeholder="__('slide_contact_comment') + '*'" name="message"></textarea>
        </div>

        <div id="contacts-rec" class="g-recaptcha" ></div>

        <div class="form-group">
            <button v-bind:class="{ 'd-none': sending }" type="submit">{{__('slide_contact_send_button') }}</button>

            <img v-bind:class="{ 'd-none': !sending }" src="/img/loaders/ball-triangle.svg" alt="">
        </div>

        <div class="footer">
            {{ __('slide_contact_footer_text') }}
        </div>
    </form>
</template>

<script>
    export default {
        name: "contactForm",
        data: function () {
            return {
                name: '',
                email: '',
                message: '',
                sending: false
            }
        },
        methods: {
            sendContactFrom: function () {

                var response = grecaptcha.getResponse(contactsRec);
                if (response.length === 0) {
                    grecaptcha.reset(contactsRec);
                    return false;
                }

                let formData = new FormData();

                formData.append('name', this.name);
                formData.append('email', this.email);
                formData.append('message', this.message);
                formData.append('g-recaptcha-response', response);

                this.sending = true;

                axios.post('/contacts', formData)
                    .then((response) => {
                        this.$refs.contactForm.reset();
                        this.sending = false;
                        $('#modal_result').fadeIn();
                        this.closeModal();
                    })
                    .catch((error) => {
                        this.sending = false;
                        alert('Error email sending');
                    });

            },
            closeModal: function () {
                setTimeout(function () {
                    $('#modal_result').fadeOut();

                    $('#contact-form').trigger("reset");

                    grecaptcha.reset();
                }, 3000);
            }
        }
    }
</script>

<style scoped>

</style>
