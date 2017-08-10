#!/bin/bash
cd /home/travis/build/OpenSKOS/OpenSKOS/tools

php tenant.php --code=example --name="test tenant"  --uri=http://test.com --uuid=test_a --disableSearchInOtherTenants=true --enableStatussesSystem=true --email=admin@test.com --password=password --apikey=xxx --action=create

php user_account.php --adminkey=xxx --code=example --name=userguest  --email=userguest@mail.com --password=u3 --apikey=zzz --role=guest  create

php user_account.php --adminkey=xxx --code=example --name=usereditor --email=usereditor@mail.com --password=u2 --apikey=yyy --role=editor  create

php set.php --tenant=example --key=xxx --code=set01 --title="Test Set 01" --license=http://creativecommons.org/licenses/by/4.0/ --oaibaseuri=http://set01  --allowoai=true --conceptbaseuri=http://set01/set01abc --uuid=set01abc --uri=http://set01/set01abc --webpage=http://set01/page create

php conceptscheme_or_skoscollection.php --tenant=example --key=xxx --setUri=http://set01/set01abc --uri=http://scheme01/ --description="test scheme 1" --uuid=scheme01abc  --title="test scheme 01"  --restype=scheme create

php conceptscheme_or_skoscollection.php --tenant=example --key=xxx --setUri=http://set01/set01abc --uri=http://scheme02/ --description="test scheme 2" --uuid=scheme02abc  --title="test scheme 02"  --restype=scheme create

cd /home/travis/build/OpenSKOS/OpenSKOS