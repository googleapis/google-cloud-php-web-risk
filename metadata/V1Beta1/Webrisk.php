<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/webrisk/v1beta1/webrisk.proto

namespace GPBMetadata\Google\Cloud\Webrisk\V1Beta1;

class Webrisk
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad51a0a2a676f6f676c652f636c6f75642f7765627269736b2f763162657461312f7765627269736b2e70726f746f121c676f6f676c652e636c6f75642e7765627269736b2e763162657461311a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f22f2020a1c436f6d707574655468726561744c697374446966665265717565737412420a0b7468726561745f7479706518012001280e32282e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e546872656174547970654203e0410212150a0d76657273696f6e5f746f6b656e18022001280c12600a0b636f6e73747261696e747318032001280b32462e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e436f6d707574655468726561744c69737444696666526571756573742e436f6e73747261696e74734203e041021a94010a0b436f6e73747261696e747312180a106d61785f646966665f656e7472696573180120012805121c0a146d61785f64617461626173655f656e7472696573180220012805124d0a16737570706f727465645f636f6d7072657373696f6e7318032003280e322d2e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e436f6d7072657373696f6e54797065229a040a1d436f6d707574655468726561744c69737444696666526573706f6e7365125f0a0d726573706f6e73655f7479706518042001280e32482e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e436f6d707574655468726561744c69737444696666526573706f6e73652e526573706f6e73655479706512450a096164646974696f6e7318052001280b32322e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e546872656174456e7472794164646974696f6e7312430a0872656d6f76616c7318062001280b32312e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e546872656174456e74727952656d6f76616c7312190a116e65775f76657273696f6e5f746f6b656e18072001280c12560a08636865636b73756d18082001280b32442e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e436f6d707574655468726561744c69737444696666526573706f6e73652e436865636b73756d12390a157265636f6d6d656e6465645f6e6578745f6469666618022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d701a1a0a08436865636b73756d120e0a0673686132353618012001280c22420a0c526573706f6e736554797065121d0a19524553504f4e53455f545950455f554e535045434946494544100012080a0444494646100112090a0552455345541002226a0a11536561726368557269735265717565737412100a037572691801200128094203e0410212430a0c7468726561745f747970657318022003280e32282e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e546872656174547970654203e0410222de010a1253656172636855726973526573706f6e7365124a0a0674687265617418012001280b323a2e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e53656172636855726973526573706f6e73652e5468726561745572691a7c0a09546872656174557269123e0a0c7468726561745f747970657318012003280e32282e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e54687265617454797065122f0a0b6578706972655f74696d6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d70226f0a135365617263684861736865735265717565737412130a0b686173685f70726566697818012001280c12430a0c7468726561745f747970657318022003280e32282e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e546872656174547970654203e0410222ae020a14536561726368486173686573526573706f6e7365124e0a077468726561747318012003280b323d2e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e536561726368486173686573526573706f6e73652e5468726561744861736812380a146e656761746976655f6578706972655f74696d6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d701a8b010a0a54687265617448617368123e0a0c7468726561745f747970657318012003280e32282e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e54687265617454797065120c0a046861736818022001280c122f0a0b6578706972655f74696d6518032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d702299010a14546872656174456e7472794164646974696f6e73123b0a0a7261775f68617368657318012003280b32272e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e52617748617368657312440a0b726963655f68617368657318022001280b322f2e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e5269636544656c7461456e636f64696e67229b010a13546872656174456e74727952656d6f76616c73123d0a0b7261775f696e646963657318012001280b32282e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e526177496e646963657312450a0c726963655f696e646963657318022001280b322f2e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e5269636544656c7461456e636f64696e67221d0a0a526177496e6469636573120f0a07696e646963657318012003280522340a0952617748617368657312130a0b7072656669785f73697a6518012001280512120a0a7261775f68617368657318022001280c226b0a115269636544656c7461456e636f64696e6712130a0b66697273745f76616c756518012001280312160a0e726963655f706172616d6574657218022001280512130a0b656e7472795f636f756e7418032001280512140a0c656e636f6465645f6461746118042001280c2a650a0a54687265617454797065121b0a175448524541545f545950455f554e5350454349464945441000120b0a074d414c57415245100112160a12534f4349414c5f454e47494e454552494e47100212150a11554e57414e5445445f534f46545741524510032a460a0f436f6d7072657373696f6e5479706512200a1c434f4d5052455353494f4e5f545950455f554e535045434946494544100012070a03524157100112080a04524943451002329e050a155765625269736b536572766963655631426574613112e2010a15436f6d707574655468726561744c69737444696666123a2e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e436f6d707574655468726561744c69737444696666526571756573741a3b2e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e436f6d707574655468726561744c69737444696666526573706f6e7365225082d3e493022212202f763162657461312f7468726561744c697374733a636f6d7075746544696666da41257468726561745f747970652c76657273696f6e5f746f6b656e2c636f6e73747261696e747312a0010a0a53656172636855726973122f2e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e53656172636855726973526571756573741a302e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e53656172636855726973526573706f6e7365222f82d3e493021612142f763162657461312f757269733a736561726368da41107572692c7468726561745f747970657312b0010a0c53656172636848617368657312312e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e536561726368486173686573526571756573741a322e676f6f676c652e636c6f75642e7765627269736b2e763162657461312e536561726368486173686573526573706f6e7365223982d3e493021812162f763162657461312f6861736865733a736561726368da4118686173685f7072656669782c7468726561745f74797065731a4aca41167765627269736b2e676f6f676c65617069732e636f6dd2412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d42d8010a1a636f6d2e676f6f676c652e7765627269736b2e76316265746131420c5765625269736b50726f746f50015a43676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f7765627269736b2f763162657461313b7765627269736ba2020447435752aa021c476f6f676c652e436c6f75642e5765625269736b2e56314265746131ca021c476f6f676c655c436c6f75645c5765625269736b5c56316265746131ea021f476f6f676c653a3a436c6f75643a3a5765625269736b3a3a56316265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

