import { loadStripe } from "@stripe/stripe-js";

document.addEventListener("DOMContentLoaded", async () => {

    const paymentContainer = document.getElementById("payment-element");
    if (!paymentContainer) return;

    const stripeKey = paymentContainer.dataset.stripeKey;
    const clientSecret = paymentContainer.dataset.clientSecret;
    const returnUrl = paymentContainer.dataset.returnUrl;


    const stripe = await loadStripe(stripeKey);

    const elements = stripe.elements({
        clientSecret: clientSecret,
        appearance: {
            theme: 'stripe',
            variables: {
                colorPrimary: '#d97706',
            },
        },
    });

    var paymentElement = elements.create('payment', {
        paymentMethodOrder: ['twint', 'card', 'apple_pay', 'google_pay']
    });
    paymentElement.mount('#payment-element');

    const form = document.getElementById('payment-form');
    const submitButton = form.querySelector('button[type="submit"]');

    paymentElement.on('change', (event) => {
        form.scrollIntoView({
            behavior: 'smooth'
        });
    });

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        submitButton.disabled = true;
        const originalText = submitButton.innerHTML;
        submitButton.textContent = 'Loading...';
        form.style.pointerEvents = 'none';

        const result = await stripe.confirmPayment({
            elements,
            confirmParams: {
                return_url: returnUrl,
            },
        }).then(function (result) {
            if (result.error) {
                submitButton.disabled = false;
                submitButton.innerHTML = originalText;
                form.style.pointerEvents = 'none';
                console.error(result.error.message);
            }
        });
    });

});
