<?php 
return [
  'backend' => [
    'access' => [
      'title' => 'การจัดการการเข้าถึง',
      'export' => 'ส่งออก',
      'copy' => 'สำเนา',
      'print' => 'พิมพ์',
      'roles' => 
      [
        'all' => 'บทบาททั้งหมด',
        'create' => 'สร้างบทบาท',
        'edit' => 'แก้ไขบทบาท',
        'management' => 'การจัดการบทบาท',
        'main' => 'บทบาท',
      ],
      'permissions' => 
      [
        'all' => 'สิทธิ์ทั้งหมด',
        'create' => 'สร้างการอนุญาต',
        'edit' => 'แก้ไขการอนุญาต',
        'management' => 'การจัดการสิทธิ์',
        'main' => 'สิทธิ์',
      ],
      'users' => 
      [
        'all' => 'ผู้ใช้ทั้งหมด',
        'change-password' => 'เปลี่ยนรหัสผ่าน',
        'create' => 'สร้างผู้ใช้',
        'deactivated' => 'ผู้ใช้ที่ไม่ได้ใช้งาน',
        'deleted' => 'ผู้ใช้ที่ถูกลบ',
        'edit' => 'แก้ไขผู้ใช้',
        'main' => 'ผู้ใช้',
        'view' => 'ดูผู้ใช้',
        'action' => 'หนังบู๊',
        'list' => 'รายการ',
        'add-new' => 'เพิ่มใหม่',
        'deactivated-users' => 'ผู้ใช้ที่ไม่ได้ใช้งาน',
        'deleted-users' => 'ผู้ใช้ที่ถูกลบ',
      ],
    ],
    'log-viewer' => [
      'main' => 'โปรแกรมดูบันทึก',
      'dashboard' => 'แผงควบคุม',
      'logs' => 'ท่อน',
    ],
    'sidebar' => [
      'dashboard' => 'แผงควบคุม',
      'general' => 'ทั่วไป',
      'system' => 'ระบบ',
    ],
    'pages' => [
      'all' => 'ทุกหน้า',
      'create' => 'สร้างเพจ',
      'edit' => 'แก้ไขหน้า',
      'management' => 'การจัดการหน้า',
      'main' => 'หน้า',
    ],
    'blogs' => [
      'all' => 'บล็อกทั้งหมด',
      'create' => 'สร้างบล็อก',
      'edit' => 'แก้ไขบล็อก',
      'management' => 'การจัดการบล็อก',
      'main' => 'บล็อก',
    ],
    'blogcategories' => [
      'all' => 'หมวดหมู่บล็อกทั้งหมด',
      'create' => 'สร้างหมวดหมู่บล็อก',
      'edit' => 'แก้ไขหมวดหมู่บล็อก',
      'management' => 'การจัดการหมวดหมู่บล็อก',
      'main' => 'หน้า CMS',
    ],
    'blogtags' => [
      'all' => 'บล็อกแท็กทั้งหมด',
      'create' => 'สร้างแท็กบล็อก',
      'edit' => 'แก้ไขแท็กบล็อก',
      'management' => 'การจัดการแท็กบล็อก',
      'main' => 'แท็กบล็อก',
    ],
    'blog' => [
      'all' => 'หน้าบล็อกทั้งหมด',
      'create' => 'สร้างหน้าบล็อก',
      'edit' => 'แก้ไขหน้าบล็อก',
      'management' => 'การจัดการบล็อก',
      'main' => 'หน้าบล็อก',
    ],
    'faqs' => [
      'all' => 'หน้าคำถามที่พบบ่อยทั้งหมด',
      'create' => 'สร้างหน้าคำถามถามบ่อย',
      'edit' => 'แก้ไขหน้าคำถามที่พบบ่อย',
      'management' => 'การจัดการถามตอบ',
      'main' => 'หน้าคำถามที่พบบ่อย',
    ],
    'settings' => [
      'all' => 'การตั้งค่าทั้งหมด',
      'create' => 'สร้างการตั้งค่า',
      'edit' => 'แก้ไขการตั้งค่า',
      'management' => 'การจัดการการตั้งค่า',
      'main' => 'การตั้งค่า',
    ],
    'menus' => [
      'all' => 'เมนูทั้งหมด',
      'create' => 'สร้างเมนู',
      'edit' => 'แก้ไขเมนู',
      'management' => 'การจัดการเมนู',
      'main' => 'เมนู',
    ],
    'modules' => [
      'all' => 'หน้าโมดูลทั้งหมด',
      'create' => 'สร้างหน้าโมดูล',
      'management' => 'การจัดการโมดูล',
      'main' => 'หน้าโมดูล',
    ],
    'plans' => [
      'all' => 'แผนทั้งหมด',
      'create' => 'สร้างแผน',
      'edit' => 'แก้ไขแผน',
      'management' => 'การจัดการแผน',
      'main' => 'แผน',
    ],
    'geos' => [
      'all' => 'Geos ทั้งหมด',
      'create' => 'สร้างทางภูมิศาสตร์',
      'edit' => 'แก้ไขภูมิศาสตร์',
      'management' => 'การจัดการทางภูมิศาสตร์',
      'main' => 'Geos',
    ],
    'customers' => [
      'all' => 'ลูกค้าทั้งหมด',
      'create' => 'สร้างลูกค้า',
      'edit' => 'แก้ไขลูกค้า',
      'management' => 'การจัดการลูกค้า',
      'main' => 'ลูกค้า',
    ],
    'customergroups' => [
      'all' => 'กลุ่มลูกค้าทั้งหมด',
      'create' => 'สร้างกลุ่มลูกค้า',
      'edit' => 'แก้ไขกลุ่มลูกค้า',
      'management' => 'การจัดการกลุ่มลูกค้า',
      'main' => 'กลุ่มลูกค้า',
    ],
    'warehouses' => [
      'all' => 'คลังสินค้าทั้งหมด',
      'create' => 'สร้างคลังสินค้า',
      'edit' => 'แก้ไขคลังสินค้า',
      'management' => 'การจัดการคลังสินค้า',
      'main' => 'โกดัง',
    ],
    'productcategories' => [
      'all' => 'หมวดหมู่สินค้าทั้งหมด',
      'create' => 'สร้างหมวดหมู่สินค้า',
      'edit' => 'แก้ไขหมวดหมู่สินค้า',
      'management' => 'การจัดการหมวดหมู่สินค้า',
      'main' => 'หมวดหมู่สินค้า',
    ],
    'products' => [
      'all' => 'สินค้าทั้งหมด',
      'create' => 'สร้างผลิตภัณฑ์',
      'edit' => 'แก้ไขผลิตภัณฑ์',
      'management' => 'การจัดการผลิตภัณฑ์',
      'main' => 'ผลิตภัณฑ์',
    ],
    'invoices' => [
      'all' => 'ใบแจ้งหนี้ทั้งหมด',
      'create' => 'สร้างใบแจ้งหนี้',
      'edit' => 'แก้ไขใบแจ้งหนี้',
      'management' => 'การจัดการใบแจ้งหนี้',
      'main' => 'ใบแจ้งหนี้',
    ],
    'additionals' => [
      'all' => 'ภาษี & ส่วนลดทั้งหมด',
      'create' => 'สร้างภาษี & ส่วนลด',
      'edit' => 'แก้ไขภาษี & ส่วนลด',
      'management' => 'การจัดการภาษีและส่วนลด',
      'main' => 'ภาษี & ส่วนลด',
    ],
    'currencies' => [
      'all' => 'สกุลเงินทั้งหมด',
      'create' => 'สร้างสกุลเงิน',
      'edit' => 'แก้ไขสกุลเงิน',
      'management' => 'การจัดการสกุลเงิน',
      'main' => 'สกุลเงิน',
    ],
    'terms' => [
      'all' => 'เงื่อนไขทั้งหมด',
      'create' => 'สร้างคำศัพท์',
      'edit' => 'แก้ไขคำศัพท์',
      'management' => 'การจัดการระยะ',
      'main' => 'ข้อตกลงและเงื่อนไข',
    ],
    'customfields' => [
      'all' => 'ฟิลด์ที่กำหนดเองทั้งหมด',
      'create' => 'สร้างฟิลด์กำหนดเอง',
      'edit' => 'แก้ไขฟิลด์ที่กำหนดเอง',
      'management' => 'การจัดการฟิลด์ที่กำหนดเอง',
      'main' => 'ฟิลด์ที่กำหนดเอง',
    ],
    'prefixes' => [
      'all' => 'คำนำหน้าทั้งหมด',
      'create' => 'สร้างคำนำหน้า',
      'edit' => 'แก้ไขคำนำหน้า',
      'management' => 'การจัดการคำนำหน้า',
      'main' => 'คำนำหน้า',
    ],
    'accounts' => [
      'all' => 'บัญชีทั้งหมด',
      'create' => 'สร้างบัญชี',
      'edit' => 'แก้ไขบัญชี',
      'management' => 'การจัดการบัญชี',
      'main' => 'บัญชี',
    ],
    'transactions' => [
      'all' => 'ธุรกรรมทั้งหมด',
      'create' => 'สร้างธุรกรรม',
      'edit' => 'แก้ไขการทำธุรกรรม',
      'management' => 'การจัดการธุรกรรม',
      'main' => 'การทำธุรกรรม',
    ],
    'templates' => [
      'all' => 'เทมเพลตทั้งหมด',
      'create' => 'สร้างเทมเพลต',
      'edit' => 'แก้ไขเทมเพลต',
      'management' => 'การจัดการเทมเพลต',
      'main' => 'แม่แบบ',
    ],
    'transactioncategories' => [
      'all' => 'หมวดธุรกรรมทั้งหมด',
      'create' => 'สร้างประเภทธุรกรรม',
      'edit' => 'แก้ไขหมวดหมู่ธุรกรรม',
      'management' => 'การจัดการหมวดหมู่ธุรกรรม',
      'main' => 'หมวดธุรกรรม',
    ],
    'productvariables' => [
      'all' => 'ตัวแปรผลิตภัณฑ์ทั้งหมด',
      'create' => 'สร้างตัวแปรผลิตภัณฑ์',
      'edit' => 'แก้ไขตัวแปรผลิตภัณฑ์',
      'management' => 'การจัดการตัวแปรผลิตภัณฑ์',
      'main' => 'ตัวแปรผลิตภัณฑ์',
    ],
    'hrms' => [
      'all' => 'HRMS ทั้งหมด',
      'create' => 'สร้าง Hrm',
      'edit' => 'แก้ไข Hrm',
      'management' => 'การจัดการ Hrm',
      'main' => 'HRMS',
    ],
    'banks' => [
      'all' => 'ธนาคารทั้งหมด',
      'create' => 'สร้างธนาคาร',
      'edit' => 'แก้ไขธนาคาร',
      'management' => 'การจัดการธนาคาร',
      'main' => 'ธนาคาร',
    ],
    'usergatewayentries' => [
      'all' => 'เกตเวย์การชำระเงินทั้งหมด',
      'create' => 'สร้างเกตเวย์การชำระเงิน',
      'edit' => 'แก้ไขเกตเวย์การชำระเงิน',
      'management' => 'การจัดการช่องทางการชำระเงิน',
      'main' => 'เกตเวย์การชำระเงิน',
    ],
    'departments' => [
      'all' => 'แผนกทั้งหมด',
      'create' => 'สร้างแผนก',
      'edit' => 'แก้ไขแผนก',
      'management' => 'ฝ่ายบริหาร',
      'main' => 'หน่วยงาน',
    ],
    'quotes' => [
      'all' => 'คำคมทั้งหมด',
      'create' => 'สร้างใบเสนอราคา',
      'edit' => 'แก้ไขใบเสนอราคา',
      'management' => 'การจัดการคำพูด',
      'main' => 'คำคม',
    ],
    'purchaseorders' => [
      'all' => 'คำสั่งซื้อทั้งหมด',
      'create' => 'สร้างใบสั่งซื้อ',
      'edit' => 'แก้ไขใบสั่งซื้อ',
      'management' => 'การจัดการคำสั่งซื้อ',
      'main' => 'คำสั่งซื้อ',
    ],
    'orders' => [
      'all' => 'คำสั่งซื้อทั้งหมด',
      'create' => 'สร้างคำสั่งซื้อ',
      'edit' => 'แก้ไขคำสั่งซื้อ',
      'management' => 'การจัดการคำสั่ง',
      'main' => 'สั่งซื้อ',
    ],
    'suppliers' => [
      'all' => 'ซัพพลายเออร์ทั้งหมด',
      'create' => 'สร้างผู้จำหน่าย',
      'edit' => 'แก้ไขผู้จำหน่าย',
      'management' => 'การจัดการซัพพลายเออร์',
      'main' => 'ซัพพลายเออร์',
    ],
    'tasks' => [
      'all' => 'งานทั้งหมด',
      'create' => 'สร้างงาน',
      'edit' => 'แก้ไขงาน',
      'management' => 'การจัดการงาน',
      'main' => 'งาน',
    ],
    'tags' => [
      'all' => 'แท็กทั้งหมด',
      'create' => 'สร้างแท็ก',
      'edit' => 'แก้ไขแท็ก',
      'management' => 'การจัดการแท็ก',
      'main' => 'แท็ก',
    ],
    'miscs' => [
      'all' => 'เบ็ดเตล็ดทั้งหมด',
      'create' => 'สร้างอื่น ๆ',
      'edit' => 'แก้ไขอื่น ๆ',
      'management' => 'การจัดการอื่น ๆ',
      'main' => 'เบ็ดเตล็ด',
    ],
    'projects' => [
      'all' => 'โครงการทั้งหมด',
      'create' => 'สร้างโครงการ',
      'edit' => 'แก้ไขโครงการ',
      'management' => 'การบริหารโครงการ',
      'main' => 'โครงการ',
    ],
    'notes' => [
      'all' => 'หมายเหตุทั้งหมด',
      'create' => 'สร้างบันทึกย่อ',
      'edit' => 'แก้ไขหมายเหตุ',
      'management' => 'การจัดการหมายเหตุ',
      'main' => 'หมายเหตุ',
    ],
    'events' => [
      'all' => 'กิจกรรมทั้งหมด',
      'create' => 'สร้างกิจกรรม',
      'edit' => 'แก้ไขกิจกรรม',
      'management' => 'การจัดการกิจกรรม',
      'main' => 'เหตุการณ์ที่เกิดขึ้น',
    ],
  ],
];