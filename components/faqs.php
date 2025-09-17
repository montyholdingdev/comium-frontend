 <?php
    $faqs = [
        'How do I activate international roaming on my sim?' => 'If you are prepaid user your default roaming is activated; for postpaid you need to visit Showroom of COMIUM.',
        'How do I activate international roaming for Senegal on COMIUM Postpaid and Prepaid sim?' => 'To activate roaming in Senegal, dial *221# and follow the instructions for free roaming service activation or deactivation.',
        'How can I check international roaming rates?' => 'You can visit our website or call the helpline at 111 from Gambia. If you are outside of Gambia, dial +2206601111.',
        'How can I Subscribe to international roaming bundle or offers?' => 'You can visit our website or call the helpline at 111 from Gambia. If you are outside of Gambia, dial +2206601111.',
        'Will I be charged for receiving calls and SMS while roaming?' => 'Receiving SMS while roaming is free. However, incoming call charges may vary according to the international gateway rates. For more information, you can visit our website or call the COMIUM helpline.',
        'Who Do I Contact If I have a roaming issue while abroad?' => '<ol><li>Call Comium help line</li><li>Submit a complaint through our website or email us at: <a href="mailto:ircomplaints@comium.gm">ircomplaints@comium.gm</a></li><li>Visit Comium Showroom</li></ol>'
    ];
    ?>
 <h3 class="red-title">FAQs & Troubleshooting</h3>


 <div class="faqs">

     <?php foreach ($faqs as $question => $answer): ?>
         <!-- FAQ Item -->
         <div class="faq">
             <div class="faq-question">
                 <span><?= $question ?></span>
                 <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                 </svg>
             </div>
             <div class="faq-answer">
                 <div>
                     <?= $answer ?>
                 </div>
             </div>
         </div>
     <?php endforeach; ?>

 </div>