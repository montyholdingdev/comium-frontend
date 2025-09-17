<h3 class="red-title">Roaming Complaints</h3>
<form id="comiumForm" novalidate>
    <div class="form-group half-width">
        <label for="firstName">First Name *</label>
        <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" />
        <div class="error" id="error-firstName"></div>
    </div>

    <div class="form-group half-width">
        <label for="lastName">Last Name *</label>
        <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" />
        <div class="error" id="error-lastName"></div>
    </div>

    <div class="form-group half-width">
        <label for="emailSubject">Email Subject</label>
        <input type="text" id="emailSubject" name="emailSubject" placeholder="Enter email subject" />
        <div class="error" id="error-emailSubject"></div>
    </div>

    <div class="form-group half-width">
        <label for="emailAddress">Email Address</label>
        <input type="email" id="emailAddress" name="emailAddress" placeholder="Enter your email address" />
        <div class="error" id="error-emailAddress"></div>
    </div>

    <div class="form-group half-width">
        <label for="comiumMobile">Comium Mobile Number *</label>
        <div class="country-code-container">
            <input type="text" disabled id="country-code" name="comiumMobile-country-code" value="+220 6" />
            <input type="number" id="comiumMobile" name="comiumMobile" />
        </div>

        <div class="error" id="error-comiumMobile"></div>
    </div>

    <div class="form-group half-width">
        <label for="otherWhatsapp">Other or WhatsApp Number *</label>
        <input type="number" id="otherWhatsapp" name="otherWhatsapp" placeholder="03xxxxxx" />
        <div class="error" id="error-otherWhatsapp"></div>
    </div>

    <div class="form-group half-width-date">
        <label for="dateIssue">Date of issue</label>
        <input type="date" id="dateIssue" name="dateIssue" />
        <div class="error" id="error-dateIssue"></div>
    </div>

    <div class="form-group full-width">
        <label>Nature of Issue *</label>
        <div class="radio-group" id="natureIssueGroup">
            <label>
                <div><input type="radio" name="natureIssue" value="Location Update" /></div><span> Location Update</span>
            </label>
            <label>
                <div><input type="radio" name="natureIssue" value="Outgoing Call" /></div><span> Outgoing Call</span>
            </label>
            <label>
                <div><input type="radio" name="natureIssue" value="Incoming Call" /></div><span> Incoming Call</span>
            </label>
            <label>
                <div><input type="radio" name="natureIssue" value="SMS" /></div><span> SMS</span>
            </label>
            <label>
                <div><input type="radio" name="natureIssue" value="Data" /></div><span> Data</span>
            </label>
            <label>
                <div><input type="radio" name="natureIssue" value="Other" /></div><span> Other</span>
            </label>
        </div>
        <div class="error" id="error-natureIssue"></div>
    </div>

    <div class="form-group full-width">
        <label for="detailedDescription">Detailed Description</label>
        <textarea id="detailedDescription" name="detailedDescription" placeholder="Enter Here" rows="5"></textarea>
        <div class="error" id="error-detailedDescription"></div>
    </div>

    <div class="form-group full-width">
        <label>Upload Files</label>
        <div class="upload-box" id="uploadBox">
            <div class="icon">
                <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 14.2422C1.79401 13.435 1 12.0602 1 10.5C1 8.15643 2.79151 6.23129 5.07974 6.01937C5.54781 3.17213 8.02024 1 11 1C13.9798 1 16.4522 3.17213 16.9203 6.01937C19.2085 6.23129 21 8.15643 21 10.5C21 12.0602 20.206 13.435 19 14.2422M7 14L11 10M11 10L15 14M11 10V19" stroke="#E1251B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </div>
            <p class="mb-0">Browse or drag files/Screenshots here (max 3 files, total 10MB)</p>
            <input name="uploadFiles" type="file" id="uploadFile" multiple accept="image/*" style="display:none;" />
        </div>
        <div id="fileList" class="file-list"></div>
        <div class="error" id="error-uploadFile"></div>
    </div>

    <div class="form-group full-width">
        <button type="submit" class="submit-btn" id="submitBtn">Submit</button>
    </div>

    <div class="form-response" id="formResponse"></div>
</form>