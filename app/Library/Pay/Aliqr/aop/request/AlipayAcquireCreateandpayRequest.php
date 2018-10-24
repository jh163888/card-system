<?php
class AlipayAcquireCreateandpayRequest { private $alipayCaRequest; private $body; private $buyerEmail; private $buyerId; private $channelParameters; private $currency; private $dynamicId; private $dynamicIdType; private $extendParams; private $formatType; private $goodsDetail; private $itBPay; private $mcardParameters; private $operatorId; private $operatorType; private $outTradeNo; private $price; private $quantity; private $refIds; private $royaltyParameters; private $royaltyType; private $sellerEmail; private $sellerId; private $showUrl; private $subject; private $totalFee; private $apiParas = array(); private $terminalType; private $terminalInfo; private $prodCode; private $apiVersion = '1.0'; private $notifyUrl; private $returnUrl; private $needEncrypt = false; public function setAlipayCaRequest($sp647857) { $this->alipayCaRequest = $sp647857; $this->apiParas['alipay_ca_request'] = $sp647857; } public function getAlipayCaRequest() { return $this->alipayCaRequest; } public function setBody($speb838e) { $this->body = $speb838e; $this->apiParas['body'] = $speb838e; } public function getBody() { return $this->body; } public function setBuyerEmail($spef417d) { $this->buyerEmail = $spef417d; $this->apiParas['buyer_email'] = $spef417d; } public function getBuyerEmail() { return $this->buyerEmail; } public function setBuyerId($spa20834) { $this->buyerId = $spa20834; $this->apiParas['buyer_id'] = $spa20834; } public function getBuyerId() { return $this->buyerId; } public function setChannelParameters($spd85252) { $this->channelParameters = $spd85252; $this->apiParas['channel_parameters'] = $spd85252; } public function getChannelParameters() { return $this->channelParameters; } public function setCurrency($spd618a1) { $this->currency = $spd618a1; $this->apiParas['currency'] = $spd618a1; } public function getCurrency() { return $this->currency; } public function setDynamicId($spfb1ebb) { $this->dynamicId = $spfb1ebb; $this->apiParas['dynamic_id'] = $spfb1ebb; } public function getDynamicId() { return $this->dynamicId; } public function setDynamicIdType($sp1199a1) { $this->dynamicIdType = $sp1199a1; $this->apiParas['dynamic_id_type'] = $sp1199a1; } public function getDynamicIdType() { return $this->dynamicIdType; } public function setExtendParams($spfd2e78) { $this->extendParams = $spfd2e78; $this->apiParas['extend_params'] = $spfd2e78; } public function getExtendParams() { return $this->extendParams; } public function setFormatType($spa365d4) { $this->formatType = $spa365d4; $this->apiParas['format_type'] = $spa365d4; } public function getFormatType() { return $this->formatType; } public function setGoodsDetail($spa63837) { $this->goodsDetail = $spa63837; $this->apiParas['goods_detail'] = $spa63837; } public function getGoodsDetail() { return $this->goodsDetail; } public function setItBPay($sp2bae1a) { $this->itBPay = $sp2bae1a; $this->apiParas['it_b_pay'] = $sp2bae1a; } public function getItBPay() { return $this->itBPay; } public function setMcardParameters($sp71b2c2) { $this->mcardParameters = $sp71b2c2; $this->apiParas['mcard_parameters'] = $sp71b2c2; } public function getMcardParameters() { return $this->mcardParameters; } public function setOperatorId($sp0413f5) { $this->operatorId = $sp0413f5; $this->apiParas['operator_id'] = $sp0413f5; } public function getOperatorId() { return $this->operatorId; } public function setOperatorType($spe6cd5c) { $this->operatorType = $spe6cd5c; $this->apiParas['operator_type'] = $spe6cd5c; } public function getOperatorType() { return $this->operatorType; } public function setOutTradeNo($sp7bb339) { $this->outTradeNo = $sp7bb339; $this->apiParas['out_trade_no'] = $sp7bb339; } public function getOutTradeNo() { return $this->outTradeNo; } public function setPrice($spf6f2b2) { $this->price = $spf6f2b2; $this->apiParas['price'] = $spf6f2b2; } public function getPrice() { return $this->price; } public function setQuantity($sp5e8f73) { $this->quantity = $sp5e8f73; $this->apiParas['quantity'] = $sp5e8f73; } public function getQuantity() { return $this->quantity; } public function setRefIds($sp819d27) { $this->refIds = $sp819d27; $this->apiParas['ref_ids'] = $sp819d27; } public function getRefIds() { return $this->refIds; } public function setRoyaltyParameters($sp1262db) { $this->royaltyParameters = $sp1262db; $this->apiParas['royalty_parameters'] = $sp1262db; } public function getRoyaltyParameters() { return $this->royaltyParameters; } public function setRoyaltyType($spa697f2) { $this->royaltyType = $spa697f2; $this->apiParas['royalty_type'] = $spa697f2; } public function getRoyaltyType() { return $this->royaltyType; } public function setSellerEmail($spea22ed) { $this->sellerEmail = $spea22ed; $this->apiParas['seller_email'] = $spea22ed; } public function getSellerEmail() { return $this->sellerEmail; } public function setSellerId($sp7445ff) { $this->sellerId = $sp7445ff; $this->apiParas['seller_id'] = $sp7445ff; } public function getSellerId() { return $this->sellerId; } public function setShowUrl($sp35bd6f) { $this->showUrl = $sp35bd6f; $this->apiParas['show_url'] = $sp35bd6f; } public function getShowUrl() { return $this->showUrl; } public function setSubject($sp547016) { $this->subject = $sp547016; $this->apiParas['subject'] = $sp547016; } public function getSubject() { return $this->subject; } public function setTotalFee($sp3a5e72) { $this->totalFee = $sp3a5e72; $this->apiParas['total_fee'] = $sp3a5e72; } public function getTotalFee() { return $this->totalFee; } public function getApiMethodName() { return 'alipay.acquire.createandpay'; } public function setNotifyUrl($spa00d19) { $this->notifyUrl = $spa00d19; } public function getNotifyUrl() { return $this->notifyUrl; } public function setReturnUrl($sp8a30df) { $this->returnUrl = $sp8a30df; } public function getReturnUrl() { return $this->returnUrl; } public function getApiParas() { return $this->apiParas; } public function getTerminalType() { return $this->terminalType; } public function setTerminalType($spb9b0b4) { $this->terminalType = $spb9b0b4; } public function getTerminalInfo() { return $this->terminalInfo; } public function setTerminalInfo($spf3f780) { $this->terminalInfo = $spf3f780; } public function getProdCode() { return $this->prodCode; } public function setProdCode($sp5992f8) { $this->prodCode = $sp5992f8; } public function setApiVersion($spc906d7) { $this->apiVersion = $spc906d7; } public function getApiVersion() { return $this->apiVersion; } public function setNeedEncrypt($sp48c449) { $this->needEncrypt = $sp48c449; } public function getNeedEncrypt() { return $this->needEncrypt; } }