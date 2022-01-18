<?php











namespace Composer;

use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.0.0+no-version-set',
    'version' => '1.0.0.0',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => '__root__',
  ),
  'versions' => 
  array (
    '__root__' => 
    array (
      'pretty_version' => '1.0.0+no-version-set',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'erusev/parsedown' => 
    array (
      'pretty_version' => '1.7.4',
      'version' => '1.7.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cb17b6477dfff935958ba01325f2e8a2bfa6dab3',
    ),
    'erusev/parsedown-extra' => 
    array (
      'pretty_version' => '0.8.1',
      'version' => '0.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '91ac3ff98f0cea243bdccc688df43810f044dcef',
    ),
    'phpmailer/phpmailer' => 
    array (
      'pretty_version' => 'v6.5.3',
      'version' => '6.5.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'baeb7cde6b60b1286912690ab0693c7789a31e71',
    ),
    'respect/stringifier' => 
    array (
      'pretty_version' => '0.2.0',
      'version' => '0.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e55af3c8aeaeaa2abb5fa47a58a8e9688cc23b59',
    ),
    'respect/validation' => 
    array (
      'pretty_version' => '2.2.3',
      'version' => '2.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '4c21a7ffc9a4915673cb2c2843963919e664e627',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.24.0',
      'version' => '1.24.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0abb51d2f102e00a4eefcf46ba7fec406d245825',
    ),
    'tracy/tracy' => 
    array (
      'pretty_version' => 'v2.9.0',
      'version' => '2.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '551a7d936dfbd7075ced9a604b9527d1f7bfa8b4',
    ),
  ),
);







public static function getInstalledPackages()
{
return array_keys(self::$installed['versions']);
}









public static function isInstalled($packageName)
{
return isset(self::$installed['versions'][$packageName]);
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

$ranges = array();
if (isset(self::$installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = self::$installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}





public static function getVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['version'])) {
return null;
}

return self::$installed['versions'][$packageName]['version'];
}





public static function getPrettyVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return self::$installed['versions'][$packageName]['pretty_version'];
}





public static function getReference($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['reference'])) {
return null;
}

return self::$installed['versions'][$packageName]['reference'];
}





public static function getRootPackage()
{
return self::$installed['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
}
}
