<?php
if (INSTALL_INIT == 'install') {
  echo '<h2>ยินดีต้อนรับสู่การติดตั้ง GCMS เวอร์ชั่น '.$version.'</h2>';
  echo '<p><em>เราไม่พบไฟล์ config.php บนระบบ หรือไฟล์ config.php ของคุณอาจไม่ถูกต้อง</em> ซึ่งอาจเป็นไปได้ว่าคุณเพิ่งติดตั้ง GCMS เป็นครั้งแรก</p>';
  echo '<p>คุณสามารถเริ่มต้นติดตั้ง GCMS ได้ง่ายๆโดยการตอบคำถามไม่กี่ข้อ เพื่อที่คุณจะได้เป็นเจ้าของ Ajax CMS ที่สมบูรณ์แบบ ที่สร้างสรรค์โดยคนไทยทั้งระบบ</p>';
  echo '<p><a href="index.php?step=1" class="button">ติดตั้ง !</a></p>';
}
