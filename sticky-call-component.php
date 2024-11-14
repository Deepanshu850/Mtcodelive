<style>
    .sticky-footer {
        display: none;
        position: fixed;
        z-index: 2000;
        bottom: 0;
        width: 100%;
        background: #EFEFEF;
        color: white;
        padding-block: 4px;
        text-align: center;
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(0, 0, 0, 0.42);
        background: linear-gradient(697deg, rgba(0, 91, 83, 0.98), rgba(0, 30, 18, 0.3), rgba(0, 91, 83, 0.9));
    }

    .sticky-footer a,
    .sticky-footer button {
        color: white;
        text-decoration: none;
        font-size: 12px;
        padding: 6px 10px;
        border: none;
        /* background: #FFA500; */
        border-radius: 5px;
        cursor: pointer;
    }

    .button-call {
        background: linear-gradient(135deg, #005b52, #00796b);
        border-color: #004d46;
    }

    .button-enquiry {
        background: linear-gradient(135deg, #00796b, #00a28a);
        border-color: #00695c;
    }

    .button-whatsapp {
        background: #25d366;
        border-color: #007d57;
    }

    .sticky-footer i {
        margin-right: 1px;
    }

    .sticky-footer i::before {
        margin-top: 0 !important;
    }

    .whatapp.whatapp {
        background: #25d366;
    }

    @media (max-width: 768px) {
        .sticky-footer {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            padding-inline: 3px;
            gap: 3px;
        }

        .footer-section {
            padding-bottom: 1.5rem;
        }

        .slide-in-form {
            padding-bottom: 5rem;

        }
    }
</style>

<div class="sticky-footer">
    <a class="button-call track-click" data-id="5" href="tel:+919732300007"><i class="bi bi-telephone-outbound-fill"></i> Call Us</a>
    <button class="button-enquiry" onclick="openForm()"><i class="bi bi-envelope-paper-fill"></i> Enquiry</button>
    <a class=" track-click button-whatsapp" data-id="6" href="https://wa.me/+919732300007?text=Hi" target="_blank"> <i class="bi bi-whatsapp"></i> WhatsApp</a>
</div>

<script>
    function openForm() {
        var form = document.getElementById('slideInForm');
        var overlay = document.querySelector('.overlay');
        if (form.classList.contains('active')) {
            form.classList.remove('active');
            overlay.classList.remove('active');
        } else {
            form.classList.add('active');
            overlay.classList.add('active');
        }
        console.log('Form toggled');
    }

    window.addEventListener('resize', function() {
        var floatButton = document.querySelector('.float.bounce');
        var stickyFooter = document.querySelector('.sticky-footer');
        if (window.innerWidth <= 768) {
            stickyFooter.style.display = 'grid';
            floatButton.style.display = 'none';
        } else {
            stickyFooter.style.display = 'none';
            floatButton.style.display = 'block';
        }
    });

    // Initial check
    window.dispatchEvent(new Event('resize'));
</script>