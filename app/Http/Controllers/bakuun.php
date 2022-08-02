<?php
$xml = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<OTA_HotelInvCountNotifRQ Version="1.0" TimeStamp="2017-01-01T00:00:00-04:00" EchoToken="CERT-INVCOUNT-UPDATE" xmlns="http://www.opentravel.org/OTA/2003/05">
	<POS>
		<Source>
			<BookingChannel Type="7">
				<CompanyName Code="HTL15">My Hotel Name</CompanyName>
			</BookingChannel>
		</Source>
	</POS>
	<Inventories HotelCode="HTL15.3">
		<Inventory>
			<StatusApplicationControl Start="2021-12-06" End="2022-09-06" InvTypeCode="R15.3.1" RatePlanCode="R15.3.1.1" />
			<InvCounts>
				<InvCount Count="12" CountType="2" />
			</InvCounts>
		</Inventory>
		<Inventory>
			<StatusApplicationControl Start="2021-12-08" End="2022-09-06" InvTypeCode="R15.3.2" RatePlanCode="R15.3.2.1" />
			<InvCounts>
				<InvCount Count="12" CountType="2" />
			</InvCounts>
		</Inventory>
	</Inventories>
</OTA_HotelInvCountNotifRQ>';
