<?
class Runner {
	static function init() {
		try {
			$conf = new Conf( dirname(__FILE__) . "/conf01.xml" );

			print "user: " . $conf->get('user') . "\n";
			print "host: " . $conf->get('host') . "\n";
			$conf->set("pass", "newpass");
			$conf->write();
		} catch ( FileException $e ) {
		
		} catch ( XmlException $e ) {

		} catch ( ConfException $e ) {

		} catch ( Exception $e ) {
			
		}
	}
}