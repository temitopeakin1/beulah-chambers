<!-- Free Evaluation Modal -->
<div id="evaluationModal" class="evaluation-modal" aria-hidden="true">
  <div class="evaluation-modal__overlay" data-close-modal></div>
  <div class="evaluation-modal__box" role="dialog" aria-labelledby="evaluationModalTitle" aria-modal="true">
    <button type="button" class="evaluation-modal__close" data-close-modal aria-label="Close modal">
      <i class="fas fa-times"></i>
    </button>
    <h2 id="evaluationModalTitle" class="evaluation-modal__title">
      <i class="fas fa-balance-scale"></i> Free Case Evaluation
    </h2>
    <p class="evaluation-modal__intro">Tell us about your matter. We’ll review and get back to you shortly.</p>
    <form class="evaluation-modal__form" method="post" action="email.php">
      <input type="hidden" name="form_type" value="evaluation">
      <div class="evaluation-modal__row">
        <label class="evaluation-modal__label" for="eval-name">Full Name <span class="required">*</span></label>
        <input type="text" id="eval-name" name="name" class="evaluation-modal__input" placeholder="Your full name" required>
      </div>
      <div class="evaluation-modal__row">
        <label class="evaluation-modal__label" for="eval-email">Email <span class="required">*</span></label>
        <input type="email" id="eval-email" name="email" class="evaluation-modal__input" placeholder="your@email.com" required>
      </div>
      <div class="evaluation-modal__row">
        <label class="evaluation-modal__label" for="eval-phone">Phone <span class="required">*</span></label>
        <input type="tel" id="eval-phone" name="phone" class="evaluation-modal__input" placeholder="Your phone number" required>
      </div>
      <div class="evaluation-modal__row">
        <label class="evaluation-modal__label" for="eval-area">Practice area / Area of law</label>
        <select id="eval-area" name="practice_area" class="evaluation-modal__input evaluation-modal__select">
          <option value="">— Select area —</option>
          <option value="Labour Law">Labour Law</option>
          <option value="Commercial Law">Commercial Law</option>
          <option value="Family Law">Family Law</option>
          <option value="Arbitration">Arbitration</option>
          <option value="Intellectual Property">Intellectual Property Law</option>
          <option value="Human Rights">Human Rights</option>
          <option value="Criminal Law">Criminal Law</option>
          <option value="Banking and Debt Recovery">Banking & Debt Recovery</option>
          <option value="Election Petitions">Election Petitions</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <div class="evaluation-modal__row">
        <label class="evaluation-modal__label" for="eval-matter">Brief description of your matter <span class="required">*</span></label>
        <textarea id="eval-matter" name="matter_description" class="evaluation-modal__input evaluation-modal__textarea" rows="4" placeholder="Describe your legal matter in brief…" required></textarea>
      </div>
      <div class="evaluation-modal__row">
        <label class="evaluation-modal__label">Preferred contact method</label>
        <div class="evaluation-modal__radio-group">
          <label class="evaluation-modal__radio-label">
            <input type="radio" name="contact_method" value="phone" class="evaluation-modal__radio" checked>
            Phone
          </label>
          <label class="evaluation-modal__radio-label">
            <input type="radio" name="contact_method" value="email" class="evaluation-modal__radio">
            Email
          </label>
        </div>
      </div>
      <div class="evaluation-modal__row">
        <label class="evaluation-modal__checkbox-label">
          <input type="checkbox" name="consent" value="1" class="evaluation-modal__checkbox" required>
          I agree to be contacted regarding my enquiry <span class="required">*</span>
        </label>
      </div>
      <div class="evaluation-modal__actions">
        <button type="submit" class="evaluation-modal__submit">Submit for evaluation</button>
      </div>
    </form>
  </div>
</div>
