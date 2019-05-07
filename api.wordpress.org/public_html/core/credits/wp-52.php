<?php

class WP_52_Credits extends WP_Credits {

	public function groups() {
		$groups = [
			'core-developers'         => [
				'name'    => 'Noteworthy Contributors',
				'type'    => 'titles',
				'shuffle' => false,
				'data'    => [
					'matt'           => [ 'Matt Mullenweg', 'Release Lead' ],
					'chanthaboune'   => [ 'Josepha Haden', 'Release Lead' ],
					'pento'          => [ 'Gary Pendergast', 'Release Lead' ],
					'dd32'           => [ 'Dion Hulse', 'Lead Developer' ],
					'desrosj'        => [ 'Jonathan Desrosiers', 'Core Developer' ],
					'audrasjb'       => [ 'Jean-Baptiste Audras', 'Core Developer' ],
					'SergeyBiryukov' => [ 'Sergey Biryukov', 'Core Developer' ],
					'youknowriad'    => [ 'Riad Benguella', 'Core Developer' ],
					'flixos90'       => [ 'Felix Arntz', 'Core Developer' ],
					'Clorith'        => 'Marius Jensen',
					'hedgefield'     => 'Tim Hedgefield',
					'mapk'           => 'Mark Uraine',
					'JeffPaul'       => 'Jeff Paul',
					'earnjam'        => 'William Earnhardt',
				],
			],
			'contributing-developers' => [
				'name'    => false,
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => [
					'afercia'           => 'Andrea Fercia',
					'garrett-eclipse'   => 'Garrett Hyder',
					'mukesh27'          => 'Mukesh Panchal',
					'azaozz'            => 'Andrew Ozz',
					'birgire'           => 'Birgir Erlendsson',
					'ianbelanger'       => 'Ian Belanger',
					'xkon'              => 'Konstantinos Xenos',
					'spacedmonkey'      => 'Jonny Harris',
					'johnbillion'       => 'John Blackbourn',
					'TimothyBlynJacobs' => 'Timothy Jacobs',
					'ocean90'           => 'Dominik Schilling',
					'afragen'           => 'Andy Fragen',
					'melchoyce'         => 'Mel Choyce',
					'pbiron'            => 'Paul Biron',
					'jorbin'            => 'Aaron Jorbin',
					'ramiy'             => 'Rami Yushuvaev',
					'adamsilverstein'   => 'Adam Silverstein',
					'man4toman'         => 'Morteza Geransayeh',
					'swissspidy'        => 'Pascal Birchler',
					'chetan200891'      => 'Chetan Prajapati',
					'aduth'             => 'Andrew Duthie',
					'kraftbj'           => 'Brandon Kraft',
					'andizer'           => 'Andy Meerwaldt',
					'karmatosed'        => 'Tammie Lister',
					'david.binda'       => 'David Binovec',
					'tellyworth'        => 'Alex Shiels',
					'dswebsme'          => 'D.S. Webster',
					'dimadin'           => 'Milan Dinić',
					'Joen'              => 'Joen Asmussen',
					'kjellr'            => 'Kjell Reigstad',
					'jeremyfelt'        => 'Jeremy Felt',
					'welcher'           => 'Ryan Welcher',
					'mikeschroder'      => 'Mike Schroder',
					'obenland'          => 'Konstantin Obenland',
				],
			],
		];

		return $groups;
	}

	public function props() {
		return [
			'0mirka00',
			'aandrewdixon',
			'aaroncampbell',
			'adamsilverstein',
			'adamsoucie',
			'aduth',
			'afercia',
			'afragen',
			'aldavigdis',
			'alexdenning',
			'allancole',
			'allendav',
			'andizer',
			'andraganescu',
			'andreamiddleton',
			'aniketpatel',
			'antonypuckey',
			'arena',
			'aristath',
			'audrasjb',
			'axaak',
			'azaozz',
			'bahia0019',
			'bamadesigner',
			'billerickson',
			'birgire',
			'bodohugobarwich',
			'boonebgorges',
			'bradleyt',
			'builtbynorthby',
			'bulletdigital',
			'burhandodhy',
			'cathibosco1',
			'cc0a',
			'celloexpressions',
			'chanthaboune',
			'cheffheid',
			'chetan200891',
			'chiaralovelaces',
			'chouby',
			'chrisvanpatten',
			'clorith',
			'codemascot',
			'danieltj',
			'davefx',
			'davetgreen',
			'davidbaumwald',
			'davidbinda',
			'dd32',
			'denis-de-bernardy',
			'desrosj',
			'dgroddick',
			'dhanukanuwan',
			'dianeco',
			'diddledan',
			'dilipbheda',
			'dimadin',
			'dlh',
			'dmsnell',
			'drewapicture',
			'dswebsme',
			'earnjam',
			'ebrahimzadeh',
			'empireoflight',
			'fierevere',
			'flixos90',
			'folletto',
			'fuegas',
			'garrett-eclipse',
			'garyj',
			'get_dave',
			'gitlost',
			'gziolo',
			'hardik-amipara',
			'hedgefield',
			'henrywright',
			'henrywright-1',
			'iamdmitrymayorov',
			'ianbelanger',
			'iandunn',
			'immeet94',
			'iseulde',
			'itowhid06',
			'itzmekhokan',
			'iworks',
			'ixium',
			'ixkaito',
			'j-falk',
			'jainnidhi',
			'janak007',
			'jaydeep-rami',
			'jaymanpandya',
			'jayupadhyay01',
			'jcastaneda',
			'jdeeburke',
			'jdgrimes',
			'jeffpaul',
			'jeherve',
			'jeremyfelt',
			'jitendrabanjara1991',
			'joedolson',
			'joemcgill',
			'joen',
			'johannadevos',
			'johnbillion',
			'johnjamesjacoby',
			'jonathandejong',
			'jonnybojangles',
			'joostdevalk',
			'jorbin',
			'jordesign',
			'jorgefilipecosta',
			'josephwa',
			'joshuawold',
			'joyously',
			'jplojohn',
			'jrf',
			'juiiee8487',
			'juliarrr',
			'kadamwhite',
			'karinedo',
			'karmatosed',
			'katyatina',
			'keraweb',
			'killua99',
			'kjellr',
			'knutsp',
			'kraftbj',
			'laurelfulford',
			'lexiqueen',
			'lgedeon',
			'liljimmi',
			'lkraav',
			'lord_viper',
			'lukecarbis',
			'm_uysl',
			'malae',
			'man4toman',
			'manzoorwanijk',
			'mapk',
			'marco-peralta',
			'markcallen',
			'marybaum',
			'matt',
			'mattnyeus',
			'mauteri',
			'mbelchev',
			'mcsf',
			'mdwolinski',
			'mechter',
			'melchoyce',
			'mheikkila',
			'michelleweber',
			'mikengarrett',
			'mikeschinkel',
			'mikeschroder',
			'miss_jwo',
			'miyauchi',
			'mmuhsin',
			'mohadeseghasemi',
			'mte90',
			'mukesh27',
			'nacin',
			'nateallen',
			'neobabis',
			'nerrad',
			'netweb',
			'nielsdeblaauw',
			'nielslange',
			'nnikolov',
			'noisysocks',
			'nosolosw',
			'notnownikki',
			'ocean90',
			'odminstudios',
			'ohiosierra',
			'oztaser',
			'pandelisz',
			'paragoninitiativeenterprises',
			'parsmizban',
			'pbearne',
			'pbiron',
			'pcfreak30',
			'peaceablewhale',
			'pedromendonca',
			'pento',
			'peterbooker',
			'peterwilsoncc',
			'pfiled',
			'pilou69',
			'pixolin',
			'pranalipatel',
			'pratikkry',
			'presskopp',
			'rabmalin',
			'ramiy',
			'ramonopoly',
			'rarst',
			'rinatkhaziev',
			'robobot3000',
			'ryan',
			'ryanshoover',
			'ryelle',
			'saeedfard',
			'saimonh',
			'salcode',
			'samanehmirrajabi',
			'saracup',
			'schlessera',
			'sebastianpisula',
			'sergeybiryukov',
			'sgarza',
			'sgastard',
			'sharifkiberu',
			'shazdeh',
			'shital-patel',
			'sky_76',
			'soean',
			'soulseekah',
			'spacedmonkey',
			'stevenkword',
			'subrataemfluence',
			'sudar',
			'sudhiryadav',
			'superpoincare',
			'swissspidy',
			'szepeviktor',
			'talldanwp',
			'tellyworth',
			'tfrommen',
			'thakkarhardik',
			'themonic',
			'thomstark',
			'thrijith',
			'timothyblynjacobs',
			'timph',
			'tinkerbelly',
			'tmatsuur',
			'tmdesigned',
			'tobifjellner',
			'tomharrigan',
			'toro_unit',
			'travel_girl',
			'tz-media',
			'umang7',
			'vaishalipanchal',
			'valendesigns',
			'vanyukov',
			'viper007bond',
			'webfactory',
			'welcher',
			'westonruter',
			'wido',
			'williampatton',
			'willscrlt',
			'wolly',
			'wpboss',
			'wpscholar',
			'wrwrwr0',
			'xkon',
			'yoavf',
			'youknowriad',
			'zodiac1978',
		];
	}

	public function external_libraries() {
		return [
			[ 'Babel Polyfill', 'https://babeljs.io/docs/en/babel-polyfill' ],
			[ 'Backbone.js', 'http://backbonejs.org/' ],
			[ 'Class POP3', 'https://squirrelmail.org/' ],
			[ 'clipboard.js', 'https://clipboardjs.com/' ],
			[ 'Closest', 'https://github.com/jonathantneal/closest' ],
			[ 'CodeMirror', 'https://codemirror.net/' ],
			[ 'Color Animations', 'https://plugins.jquery.com/color/' ],
			[ 'getID3()', 'http://getid3.sourceforge.net/' ],
			[ 'FormData', 'https://github.com/jimmywarting/FormData' ],
			[ 'Horde Text Diff', 'https://pear.horde.org/' ],
			[ 'hoverIntent', 'http://cherne.net/brian/resources/jquery.hoverIntent.html' ],
			[ 'imgAreaSelect', 'http://odyniec.net/projects/imgareaselect/' ],
			[ 'Iris', 'https://github.com/Automattic/Iris' ],
			[ 'jQuery', 'https://jquery.com/' ],
			[ 'jQuery UI', 'https://jqueryui.com/' ],
			[ 'jQuery Hotkeys', 'https://github.com/tzuryby/jquery.hotkeys' ],
			[ 'jQuery serializeObject', 'http://benalman.com/projects/jquery-misc-plugins/' ],
			[ 'jQuery.query', 'https://plugins.jquery.com/query-object/' ],
			[ 'jQuery.suggest', 'https://github.com/pvulgaris/jquery.suggest' ],
			[ 'jQuery UI Touch Punch', 'http://touchpunch.furf.com/' ],
			[ 'json2', 'https://github.com/douglascrockford/JSON-js' ],
			[ 'Lodash', 'https://lodash.com/' ],
			[ 'Masonry', 'http://masonry.desandro.com/' ],
			[ 'MediaElement.js', 'http://mediaelementjs.com/' ],
			[ 'Moment', 'http://momentjs.com/' ],
			[ 'PclZip', 'http://www.phpconcept.net/pclzip/' ],
			[ 'PemFTP', 'https://www.phpclasses.org/package/1743-PHP-FTP-client-in-pure-PHP.html' ],
			[ 'phpass', 'http://www.openwall.com/phpass/' ],
			[ 'PHPMailer', 'https://github.com/PHPMailer/PHPMailer' ],
			[ 'Plupload', 'http://www.plupload.com/' ],
			[ 'random_compat', 'https://github.com/paragonie/random_compat' ],
			[ 'React', 'https://reactjs.org/' ],
			[ 'Redux', 'https://redux.js.org/' ],
			[ 'Requests', 'http://requests.ryanmccue.info/' ],
			[ 'SimplePie', 'http://simplepie.org/' ],
			[ 'The Incutio XML-RPC Library', 'http://scripts.incutio.com/xmlrpc/' ],
			[ 'Thickbox', 'http://codylindley.com/thickbox/' ],
			[ 'TinyMCE', 'https://www.tinymce.com/' ],
			[ 'Twemoji', 'https://github.com/twitter/twemoji' ],
			[ 'Underscore.js', 'http://underscorejs.org/' ],
			[ 'whatwg-fetch', 'https://github.com/github/fetch' ],
			[ 'zxcvbn', 'https://github.com/dropbox/zxcvbn' ],
		];
	}
}

