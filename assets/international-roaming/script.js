$(document).ready(function () {
    $('#country-select').select2({
        placeholder: 'Select a country',
    });

    $('#type-select').select2({
        placeholder: 'Select a type',
    });


    selectedCountry = "";
    selectedType = "";

    $('#country-select').on('change', e => {
        const data = $('#country-select').select2('data');
        selectedCountry = data[0]?.text || ""; // Safely access first item
        refreshTable();
    });

    $('#type-select').on('change', e => {
        const data = $('#type-select').select2('data');
        selectedType = data[0]?.text || "";
        refreshTable();
    });

    const refreshTable = () => {
        if (selectedCountry?.trim() && selectedType?.trim()) {
            $('.table-row').addClass('hidden');
            const normalizedCountry = slugify(selectedCountry);
            $('.row-' + normalizedCountry).removeClass('hidden');
            if(normalizedCountry == 'senegal'){
                $('.senegal-text').removeClass('hidden');
            }else{
                $('.senegal-text').addClass('hidden');
            }
            $('.data-table').addClass('hidden');

            document.getElementById(selectedType + "-table").classList.remove('hidden');
        }

    }

    function slugify(text) {
        return text
            .normalize("NFD")                   // decompose accents
            .replace(/[\u0300-\u036f]/g, '')    // remove accents
            .toLowerCase()
            .replace(/[^a-z0-9]+/g, '-')        // non-alphanum → dash
            .replace(/^-+|-+$/g, '');           // trim dashes
    }

    const form = document.getElementById('comiumForm');
    const submitBtn = document.getElementById('submitBtn');
    const formResponse = document.getElementById('formResponse');

    const uploadBox = document.getElementById('uploadBox');
    const fileInput = document.getElementById('uploadFile');
    const fileListDisplay = document.getElementById('fileList');
    const uploadError = document.getElementById('error-uploadFile');

    let selectedFiles = [];

    // Helper to show error message under field
    function showError(fieldId, message) {
        document.getElementById('error-' + fieldId).textContent = message;
    }

    // Helper to clear all error messages
    function clearErrors() {
        const errors = document.querySelectorAll('.error');
        errors.forEach(el => el.textContent = '');
        formResponse.textContent = '';
    }

    // Email validation regex (basic)
    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    // Validate files (max 3 files, total size max 10MB)
    function validateFiles() {
        uploadError.textContent = '';
        const totalSize = selectedFiles.reduce((acc, file) => acc + file.size, 0);

        if (selectedFiles.length > 3) {
            uploadError.textContent = 'You can upload a maximum of 3 files.';
            return false;
        }
        if (totalSize > 10 * 1024 * 1024) {
            uploadError.textContent = 'Total upload size must not exceed 10MB.';
            return false;
        }
        return true;
    }

    function renderFiles() {
        fileListDisplay.innerHTML = '';
        selectedFiles.forEach((file, index) => {
            const fileItem = document.createElement('div');
            fileItem.className = 'file-item';

            const fileNameSpan = document.createElement('span');
            fileNameSpan.textContent = file.name;

            const removeBtn = document.createElement('button');
            removeBtn.type = 'button';
            removeBtn.className = 'remove-btn';
            removeBtn.innerHTML = '&times;';
            removeBtn.title = 'Remove file';
            removeBtn.addEventListener('click', () => {
                selectedFiles.splice(index, 1);
                renderFiles();
                validateFiles();
            });

            fileItem.appendChild(fileNameSpan);
            fileItem.appendChild(removeBtn);
            fileListDisplay.appendChild(fileItem);
        });
    }

    // Helper to check if a file is an image
    function isImageFile(file) {
        return file.type.startsWith('image/');
    }

    fileInput.addEventListener('change', (e) => {
        for (const file of e.target.files) {
            if (!isImageFile(file)) {
                alert(`File "${file.name}" is not an image and was not added.`);
                continue;
            }
            if (selectedFiles.length < 5) {
                selectedFiles.push(file);
            }
        }
        renderFiles();
        validateFiles();
        e.target.value = '';
    });

    // Handle drag and drop events on upload box
    uploadBox.addEventListener('dragover', (e) => {
        e.preventDefault();
        uploadBox.style.backgroundColor = '#fddcdc';
    });

    uploadBox.addEventListener('dragleave', (e) => {
        e.preventDefault();
        uploadBox.style.backgroundColor = '#ffe5e5';
    });

    uploadBox.addEventListener('drop', (e) => {
        e.preventDefault();
        uploadBox.style.backgroundColor = '#ffe5e5';

        const dtFiles = e.dataTransfer.files;
        for (const file of dtFiles) {
            if (!isImageFile(file)) {
                alert(`File "${file.name}" is not an image and was not added.`);
                continue;
            }
            if (selectedFiles.length < 3) {
                selectedFiles.push(file);
            }
        }
        renderFiles();
        validateFiles();
    });

    // Make upload box clickable to open file picker
    uploadBox.addEventListener('click', () => {
        fileInput.click();
    });

    // Scroll to first error field
    function scrollToFirstError() {
        const firstError = document.querySelector('.error:not(:empty)');
        if (firstError) {
            firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }

    // Validation function
    function validateForm() {
        clearErrors();
        let valid = true;

        const firstName = form.firstName.value.trim();
        const lastName = form.lastName.value.trim();
        const emailSubject = form.emailSubject.value.trim();
        const emailAddress = form.emailAddress.value.trim();
        const comiumMobile = form.comiumMobile.value.trim();
        const otherWhatsapp = form.otherWhatsapp.value.trim();
        const natureIssue = form.natureIssue.value;
        // dateIssue is optional
        // detailedDescription is optional

        if (!firstName) {
            showError('firstName', 'First Name is required.');
            valid = false;
        }
        if (!lastName) {
            showError('lastName', 'Last Name is required.');
            valid = false;
        }
        if (emailAddress && !isValidEmail(emailAddress)) {
            showError('emailAddress', 'Please enter a valid email address.');
            valid = false;
        }
        if (!comiumMobile) {
            showError('comiumMobile', 'Comium Mobile Number is required.');
            valid = false;
        }
        if (!otherWhatsapp) {
            showError('otherWhatsapp', 'Other or WhatsApp Number is required.');
            valid = false;
        }
        if (!natureIssue) {
            showError('natureIssue', 'Please select the nature of the issue.');
            valid = false;
        }
        if (!validateFiles()) {
            valid = false;
        }

        return valid;
    }

    // Disable/Enable submit button helper
    function setSubmitDisabled(disabled) {
        submitBtn.disabled = disabled;
    }



    // On form submit
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        clearErrors();
        formResponse.textContent = '';

        if (!validateForm()) {
            scrollToFirstError();
            return;
        }

        setSubmitDisabled(true);

        try {
            // Prepare form data for submission including files
            const formData = new FormData(form);

            // Append files manually because we hold them in selectedFiles
            selectedFiles.forEach((file, i) => {
                formData.append('uploadFiles' + (i + 1), file);
            });

            formData.append('_wpcf7_unit_tag', 'rte');
            // Replace with your actual endpoint URL:
            const response = await fetch('https://backend.comium.gm/wp-json/contact-form-7/v1/contact-forms/7/feedback', {
                method: 'POST',
                body: formData
            });

            if (!response.ok) {
                throw new Error('Network response was not ok');
            }

            const result = await response.json();

            if (result.status == "mail_sent") {
                formResponse.style.color = 'green';
                formResponse.textContent = 'Form submitted successfully!';
                form.reset();
                selectedFiles = [];
                renderFiles();
            } else {
                formResponse.style.color = 'red';
                formResponse.textContent = 'Submission failed. Please try again.';
            }
        } catch (error) {
            formResponse.style.color = 'red';
            formResponse.textContent = 'Error submitting form: ' + error.message;
        } finally {
            setSubmitDisabled(false);
        }
    });




    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            const icon = question.querySelector('.faq-icon');

            // Toggle the answer
            if (answer.style.maxHeight) {
                answer.style.maxHeight = null;
                icon.classList.remove('rotate-180');
                answer.classList.remove('active');
            } else {
                answer.style.maxHeight = answer.scrollHeight + "px";
                icon.classList.add('rotate-180');
                answer.classList.add('active');
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const filterTabs = document.querySelectorAll('.international-roaming-filters [data-filter]');

    filterTabs.forEach(tab => {
        tab.addEventListener('click', function () {
            const filter = this.getAttribute('data-filter');
            const newUrl = filter ? `/international-roaming/${filter}` : '/international-roaming';

            // Update URL without reloading
            history.pushState(null, '', newUrl);
        });
    });
});
