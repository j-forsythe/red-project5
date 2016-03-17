<!-- This file is used to markup the public-facing widget. -->
<ul class="fa-ul">

<?php if (strlen(trim($phone_number)) > 0 ) : ?>
  <li>
    <i class="fa-li fa fa-phone"></i>
    <span class="contact"><a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a></span>
  </li>
<?php endif; ?>

<?php if (strlen(trim($email)) > 0 ) : ?>
  <li>
  <i class="fa-li fa fa-envelope"></i>
    <span class="contact"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></span>
  </li>
<?php endif; ?>

<?php if (strlen(trim($address)) > 0 ) : ?>
  <li>
    <i class="fa-li fa fa-map-marker"></i>
    <span class="contact"><?php echo $address; ?></span>
  </li>
<?php endif; ?>
</ul>
