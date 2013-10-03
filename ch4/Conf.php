<?
class Conf {
	private $file;
	private $xml;
	private $lastmatch;

	function __construct( $file ) {
		$this->fime = $file;
		// throw exception if $file doesn't exist
		if ( !file_exists(($file)) ) {
			throw new XmlException("file '$file' does not exist");
		}

		$this->xml = simplexml_load_file($file, null, LIBXML_NOERROR);
		if ( !is_object( $this->xml) ) {
			thorw new XmlException( libxml_get_last_error() );
		}

		print gettype( $this->xml);
		$matches = $this->xml->xpath("/conf");
		if ( ! count($matches) ) {
			throw new ConfException( "could not find root element: conf");
		}
	}

	function write() {
		// throw exception if file is not writeable
		if ( ! is_writeable($this->file) ) {
			throw new Exception("file '{$this->file}' is not writeable");
		}
		file_put_contents( $this->file, $this->xml->asXml() );
	}

	function get($str) {
		$matches = $this->xml->xpath("/conf/item[@name=\"$str\"]");
		if (count($matches)) {
			$this->lastmatch = $matches[0];
			return (string)$matches[0];
		}
		return null;
	}

	function set($key, $value) {
		if ( ! is_null($this->get($key))) {
			$this->lastmatch[0] = $value;
			return;
		}
		$conf = $this->xml->conf;
		$this->xml->addChild('item', $value)->addAttribute('name', $key);
	}
}

try {
	$conf = new Conf( dirname(__FILE__) . "/conf01.xml"); // file might not exist
	print "user: " . $conf->get('user') . "\n";
	print "host: " . $conf->get('host') . "\n";
	$conf->get("pass", "newpass");
	$conf->write(); // file might not be writeable
} catch ( Exception $e ) {
	die ( $e->__toString());
}