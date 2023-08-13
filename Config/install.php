<?php
Configure::write('Security.salt', 'mR7E5UIaM81eckUm0MYCH3lDc0BXMYUL6gZk6X7f');
Configure::write('Security.cipherSeed', '02300955956671003343878433357');
Configure::write('Cache.disable', false);
Configure::write('Cache.check', true);
Configure::write('BcEnv.siteUrl', 'http://160.251.97.99/');
Configure::write('BcEnv.sslUrl', '');
Configure::write('BcEnv.mainDomain', '');
Configure::write('BcApp.adminSsl', false);
Configure::write('BcApp.allowedPhpOtherThanAdmins', false);
Cache::config('default', array('engine' => 'File'));
Configure::write('debug', 2);
