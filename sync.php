<?php
// ====== KONFIGURASI ======
$source = '/home/petz8839/fullstackproject/public/uploads';       // Folder sumber
$destination = '/home/petz8839/public_html/uploads';    // Folder tujuan (public_html)

// ====== SALIN / UPDATE FILE DARI SOURCE KE DESTINATION ======
$dir = new RecursiveDirectoryIterator($source, RecursiveDirectoryIterator::SKIP_DOTS);
$iterator = new RecursiveIteratorIterator($dir, RecursiveIteratorIterator::SELF_FIRST);

foreach ($iterator as $item) {
    $destPath = $destination . DIRECTORY_SEPARATOR . $iterator->getSubPathName();

    if ($item->isDir()) {
        if (!is_dir($destPath)) {
            mkdir($destPath, 0755, true);
        }
    } else {
        // Salin file baru atau yang berubah
        if (!file_exists($destPath) || filemtime($item) > filemtime($destPath)) {
            copy($item, $destPath);
        }
    }
}

// ====== HAPUS FILE YANG SUDAH DIHAPUS DI SOURCE ======
$rii = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($destination, RecursiveDirectoryIterator::SKIP_DOTS),
    RecursiveIteratorIterator::CHILD_FIRST
);

foreach ($rii as $item) {
    $srcPath = $source . DIRECTORY_SEPARATOR . $rii->getSubPathName();
    if (!file_exists($srcPath)) {
        if ($item->isDir()) {
            @rmdir($item->getPathname());
        } else {
            @unlink($item->getPathname());
        }
    }
}

echo "Sinkronisasi selesai pada " . date('Y-m-d H:i:s');
?>
