<?php
$images = glob('{../img_defaults/*.*}', GLOB_BRACE);
/**
 * Converts bytes into human readable file size.
 *
 * @param string $bytes
 * @return string human readable file size (2,87 Мб)
 * @author Mogilev Arseny
 */
function fileSizeConvert($bytes)
{
    $bytes = floatval($bytes);
    $arBytes = [
        0 => [
            'UNIT' => 'TB',
            'VALUE' => pow(1024, 4),
        ],
        1 => [
            'UNIT' => 'GB',
            'VALUE' => pow(1024, 3),
        ],
        2 => [
            'UNIT' => 'MB',
            'VALUE' => pow(1024, 2),
        ],
        3 => [
            'UNIT' => 'KB',
            'VALUE' => 1024,
        ],
        4 => [
            'UNIT' => 'B',
            'VALUE' => 1,
        ],
    ];
    foreach ($arBytes as $arItem) {
        if ($bytes >= $arItem['VALUE']) {
            $result = $bytes / $arItem['VALUE'];
            $result = str_replace('.', ',', strval(round($result, 2))) . ' ' . $arItem['UNIT'];
            break;
        }
    }
    return $result;
}
?>