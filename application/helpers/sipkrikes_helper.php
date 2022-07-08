<?php

/**
 * Mendapatkan list jenis bencana
 */
function getJenisBencana()
{
    $CI =& get_instance();
    return $CI->db->get('jenis_bencana')->result();
}

/**
 * Mendapatkan list provinsi
 */
function getProvinsi()
{
    $CI =& get_instance();
    return $CI->db->get('prov')->result();
}

/**
 * Mendapatkan list kabupaten kota berdasarkan provinsi
 */
function getKabkota($id_prov)
{
    $CI =& get_instance();
    $CI->db->where('id_prov', $id_prov);
    return $CI->db->get('kabkot')->result();
}

/**
 * Mendapatkan list letak geografis
 */
function getLetakGeografis()
{
    $CI =& get_instance();
    return $CI->db->get('letak_geografis')->result();
}

/**
 * Mendapatkan list status kelistrikan
 */
function getStatusListrik()
{
    $CI =& get_instance();
    return $CI->db->get('status_listrik')->result();
}

/**
 * Mendapatkan list status air bersih
 */
function getStatusAirBersih()
{
    $CI =& get_instance();
    return $CI->db->get('status_air_bersih')->result();
}

/**
 * Mengenkripsi input
 */
function hashEncrypt($input)
{
    $hash = password_hash($input, PASSWORD_DEFAULT);
    return $hash;
}

/**
 * Mendecrypt hash password dari table user
 * Mengembalikan true jika plain-text sama
 */
function hashEncryptVerify($input, $hash)
{
    if (password_verify($input, $hash)) {
        return true;
    } else {
        return false;
    }
}

?>