<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta charset="UTF-8">
    <title>Salary receipt</title>
    
<style type="text/css">
		body{
			font-family:Arial,"Helvetica Neue",Helvetica,sans-serif;
			text-decoration:none;
			text-align:justify;
		}
		a{
			text-decoration:none;
		}
</style>
</head>
<body leftmargin="0" topmargin="0" bgcolor="#ffffff" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
	<table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" style="padding: 20px;">
		<tbody>
			<tr>
				<td>
					<table  width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td colspan="2" align="left" style="font-size: 13px;color: #000000;">Name & Address of Establishment</td>
						</tr>
						<tr>
							<td colspan="2" height="5"></td>
						</tr>
						<tr>
							<td align="left" style="font-size: 13px;color: #000000;font-weight: bold;">Demo</td>
							<td align="rigth" style="font-size: 13px;color: #000000;text-align: right;">Salary Slip For The Month Of {{$MonthYear}}</td>
						</tr>
						<tr>
							<td colspan="2" height="5"></td>
						</tr>
						<tr>
							<td colspan="2" style="font-size: 11px;color: #000000;text-align: left;">317, Anupam the Business Hub, opposite Yogi Chowk, Vijay Nagar, Surat, Gujarat 395006</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td height="15"></td>
			</tr>
			<tr>
				<td width="100%">
					<table border="2" cellspacing="0" cellpadding="0" width="100%" style="border-bottom: 0;border-color: #000;">
						<tr>
							<td height="5" border="0" style="border: 0;" colspan="2"></td>
						</tr>
						<tr style="border: 0;">
							<td style="border: 0;font-size: 13px;color: #000000;width: 10%;">Emp. No:-</td>
							<td style="border: 0;font-size: 13px;color: #000000;width: 40%;">{{$empno}}</td>
							<td style="border: 0;font-size: 13px;color: #000000;width: 10%;">P.F. No:-</td>
							<td style="border: 0;font-size: 13px;color: #000000;width: 40%;">{{$PFNo}}</td>
						</tr>
						<tr>
							<td height="10" border="0" colspan="2" style="border: 0;"></td>
						</tr>
						<tr style="border: 0;">
							<td style="border: 0;font-size: 13px;color: #000000;width: 10%;">Emp. Name:-</td>
							<td style="border: 0;font-size: 13px;color: #000000;width: 40%;">{{$EmployeeName}}  </td>
							<td style="border: 0;font-size: 13px;color: #000000;width: 10%;">ESI No:-</td>
							<td style="border: 0;font-size: 13px;color: #000000;width: 40%;">{{$ESINo}}</td>
						</tr>
						<tr>
							<td height="10" border="0" colspan="2" style="border: 0;"></td>
						</tr>
						<tr style="border: 0;">
							<td style="border: 0;font-size: 13px;color: #000000;width: 10%;">Designation:-</td>
							<td style="border: 0;font-size: 13px;color: #000000;width: 40%;">{{$Designation}}</td>
							<td style="border: 0;font-size: 13px;color: #000000;width: 10%;">Bank:-</td>
							<td style="border: 0;font-size: 13px;color: #000000;width: 40%;">{{$Bank}}</td>
						</tr>
						<tr>
							<td height="10" border="0" colspan="2" style="border: 0;"></td>
						</tr>
						<tr style="border: 0;">
							<td style="border: 0;font-size: 13px;color: #000000;width: 10%;">Department:-</td>
							<td style="border: 0;font-size: 13px;color: #000000;width: 40%;">{{$Department}}</td>
							<td style="border: 0;font-size: 13px;color: #000000;width: 10%;">A/C No:-</td>
							<td style="border: 0;font-size: 13px;color: #000000;width: 40%;">{{$ACNo}}</td>
						</tr>
						<tr>
							<td height="10" border="0" colspan="2" style="border: 0;"></td>
						</tr>
						<tr style="border: 0;">
							<td style="border: 0;font-size: 13px;color: #000000;width: 10%;"></td>
							<td style="border: 0;font-size: 13px;color: #000000;width: 40%;"></td>
							<td style="border: 0;font-size: 13px;color: #000000;width: 10%;">D.O.J:-</td>
							<td style="border: 0;font-size: 13px;color: #000000;width: 40%;">{{$DOJ}}</td>
						<tr>
							<td height="5" border="0" colspan="2" style="border: 0;"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td width="100%">
					<table border="2" cellspacing="0" cellpadding="0" width="100%" style="border-color: #000;">
						<tr style="border: 0;">
							<td width="30%" align="center" style="border: 0; font-size: 12px;color: #000000;font-weight: bold;text-transform: uppercase;height: 20px;">Working details</td>
							<td width="40%" align="center" style="border-left: 2px solid;border-top: 0;font-size: 12px;color: #000000;font-weight: bold;text-transform: uppercase;border-bottom: 0;border-right: 0;height: 20px;">earning details</td>
							<td width="30%" align="center" style="border-left: 2px solid;border-bottom: 0;border-top: 0;font-size: 12px;color: #000000;font-weight: bold;text-transform: uppercase;border-right: 0;height: 20px;">deduction details</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td width="100%">
					<table border="2" cellspacing="0" cellpadding="0" width="100%" style="border-color: #000;border-top: 0;">
						<tr style="border: 0;">
							<td cellspacing="0" cellpadding="0" width="30%" align="center" style="border: 0; font-size: 12px;color: #000000;font-weight: bold;vertical-align: top;border-bottom: 0;">
								<table cellspacing="0" cellpadding="0" width="100%">
									<tr>
										<td width="30%" colspan="2" style="height: 20px;border-bottom: 2px solid;"></td>
									</tr>
									<tr>
										<td width="15%" align="center" height="5" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
										<td width="15%" align="center" height="5" style="text-align: right;padding-right: 3px"></td>
									</tr>
									<tr>
										<td width="15%" align="center" style="border-right: 2px solid;text-align: left;padding-left: 4px;">WD</td>
										<td width="15%" align="center" style="text-align: right;padding-right: 3px">{{ $WD }}</td>
									</tr>
									<tr>
										<td width="15%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
										<td width="15%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
									</tr>
									<tr>
										<td width="15%" align="center" style="border-right: 2px solid;text-align: left;padding-left: 4px;">WO</td>
										<td width="15%" align="center" style="text-align: right;padding-right: 3px">{{$WO}}</td>
									</tr>
									<tr>
										<td width="15%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
										<td width="15%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
									</tr>
									<tr>
										<td width="15%" align="center" style="border-right: 2px solid;text-align: left;padding-left: 4px;">PH</td>
										<td width="15%" align="center" style="text-align: right;padding-right: 3px">{{$PH}}</td>
									</tr>
									<tr>
										<td width="15%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
										<td width="15%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
									</tr>
									<tr>
										<td width="15%" align="center" style="border-right: 2px solid;text-align: left;padding-left: 4px;">PD</td>
										<td width="15%" align="center" style="text-align: right;padding-right: 3px">{{$PD}}</td>
									</tr>
									<tr>
										<td width="15%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
										<td width="15%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
									</tr>
									<tr>
										<td width="15%" align="center" style="border-right: 2px solid;text-align: left;padding-left: 4px;">LWP</td>
										<td width="15%" align="center" style="text-align: right;padding-right: 3px">{{$LWP}}</td>
									</tr>
									<tr>
										<td width="15%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
										<td width="15%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
									</tr>
									<tr>
										<td width="15%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
										<td width="15%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
									</tr>
									<tr>
										<td width="15%" align="center" height="5" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
										<td width="15%" align="center" height="5" style="text-align: right;padding-right: 3px"></td>
									</tr>
									<tr>
										<td width="15%" align="center" height="13" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
										<td width="15%" align="center" height="13" style="text-align: right;padding-right: 3px"></td>
									</tr>
									<tr>
										<td width="15%" align="center" height="15" style="border-right: 2px solid;text-align: left;padding-left: 4px;border-top: 1px solid;">-</td>
										<td width="15%" align="center" height="15" style="text-align: right;padding-right: 3px;border-top: 1px solid;">-</td>
									</tr>
									<tr>
										<td align="left" width="30%" colspan="2" height="20" style="border: 0; font-size: 12px;color: #000000;font-weight: bold;padding-left: 3px;border-top: 2px solid;">Rupees <em>{{$String_fromate_repees}}</em></td>
									</tr>
								</table>
							</td>
							<td width="40%" cellspacing="0" cellpadding="0" align="center" style="border-left: 0;border-top: 0;font-size: 12px;color: #000000;font-weight: bold;border-right: 0;vertical-align: top;border-bottom: 0;">
								<table cellspacing="0" cellpadding="0" width="100%">	
									<tr>
										<td width="40%" cellspacing="0" cellpadding="0" align="center" style="border-top: 0;font-size: 12px;color: #000000;border-bottom: 0;border-right: 0;">
											<table cellspacing="0" cellpadding="0" width="100%">
												<tr>
													<td width="20%" align="center" style="border-right: 2px solid;border-bottom: 2px solid;height: 20px;border-left: 2px solid;">Earnings</td>
													<td width="10%" align="center" style="border-right: 2px solid;border-bottom: 2px solid;height: 20px;">Actual</td>
													<td width="10%" align="center" style="border-bottom: 2px solid;height: 20px;">Payable</td>
												</tr>
												<tr>
													<td width="20%" align="center" height="5" style="border-right: 2px solid;text-align: left;padding-left: 4px;border-left: 2px solid;"></td>
													<td width="10%" align="center" height="5" style="border-right: 2px solid;text-align: right;padding-right: 3px"></td>
													<td width="10%" align="center" height="5" style="text-align: right;padding-right: 3px"></td>
												</tr>
												<tr>
													<td width="20%" align="center" style="border-right: 2px solid;text-align: left;padding-left: 4px;border-left: 2px solid;">BASIC</td>
													<td width="10%" align="center" style="border-right: 2px solid;text-align: right;padding-right: 3px">{{$BASIC}}</td>
													<td width="10%" align="center" style="text-align: right;padding-right: 3px">{{round($BasicSalary)}}</td>
												</tr>
												<tr>
													<td width="20%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;border-left: 2px solid;"></td>
													<td width="10%" align="center" height="10" style="border-right: 2px solid;text-align: right;padding-right: 3px"></td>
													<td width="10%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
												</tr>
												<tr>
													<td width="20%" align="center" style="border-right: 2px solid;text-align: left;padding-left: 4px;border-left: 2px solid;">HRA</td>
													<td width="10%" align="center" style="border-right: 2px solid;text-align: right;padding-right: 3px">{{$HRA}}</td>
													<td width="10%" align="center" style="text-align: right;padding-right: 3px">{{$HRA}}</td>
												</tr>
												<tr>
													<td width="20%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;border-left: 2px solid;"></td>
													<td width="10%" align="center" height="10" style="border-right: 2px solid;text-align: right;padding-right: 3px"></td>
													<td width="10%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
												</tr>
												<tr>
													<td width="20%" align="center" style="border-right: 2px solid;text-align: left;padding-left: 4px;border-left: 2px solid;">Incentive</td>
													<td width="10%" align="center" style="border-right: 2px solid;text-align: right;padding-right: 3px">{{$Incentive}}</td>
													<td width="10%" align="center" style="text-align: right;padding-right: 3px">{{$Incentive}}</td>
												</tr>
												<tr>
													<td width="20%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;border-left: 2px solid;"></td>
													<td width="10%" align="center" height="10" style="border-right: 2px solid;text-align: right;padding-right: 3px"></td>
													<td width="10%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
												</tr>
												<tr>
													<td width="20%" align="center" style="border-right: 2px solid;text-align: left;padding-left: 4px;border-left: 2px solid;">OT ({{$Total_ot_hours}} Hours)</td>
													<td width="10%" align="center" style="border-right: 2px solid;text-align: right;padding-right: 3px">{{round($OThours)}}</td>
													<td width="10%" align="center" style="text-align: right;padding-right: 3px">{{round($OThours)}}</td>
												</tr>
												<tr>
													<td width="20%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;border-left: 2px solid;"></td>
													<td width="10%" align="center" height="10" style="border-right: 2px solid;text-align: right;padding-right: 3px"></td>
													<td width="10%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
												</tr>
												<tr>
													<td width="20%" align="center" style="border-right: 2px solid;text-align: left;padding-left: 4px;border-left: 2px solid;">CONVEI</td>
													<td width="10%" align="center" style="border-right: 2px solid;text-align: right;padding-right: 3px">{{$CONVEI}}</td>
													<td width="10%" align="center" style="text-align: right;padding-right: 3px">{{$CONVEI}}</td>
												</tr>
												<tr>
													<td width="20%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;border-left: 2px solid;"></td>
													<td width="10%" align="center" height="10" style="border-right: 2px solid;text-align: right;padding-right: 3px"></td>
													<td width="10%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
												</tr>
												<tr>
													<td width="20%" align="center" style="border-right: 2px solid;text-align: left;padding-left: 4px;border-left: 2px solid;">TRANSPORT</td>
													<td width="10%" align="center" style="border-right: 2px solid;text-align: right;padding-right: 3px">{{$TRANSPORT}}</td>
													<td width="10%" align="center" style="text-align: right;padding-right: 3px">{{$TRANSPORT}}</td>
												</tr>
												<tr>
													<td width="20%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;border-left: 2px solid;"></td>
													<td width="10%" align="center" height="10" style="border-right: 2px solid;text-align: right;padding-right: 3px"></td>
													<td width="10%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
												</tr>
												<tr>
													<td width="20%" align="center" height="15" style="border-right: 2px solid;text-align: left;padding-left: 4px;font-weight: bold;border-top: 1px solid;border-left: 2px solid;">Gross Income</td>
													<td width="10%" align="center" height="15" style="border-right: 2px solid;text-align: right;padding-right: 3px;border-top: 1px solid;">-</td>
													<td width="10%" align="center" height="15" style="text-align: right;padding-right: 3px;border-top: 1px solid;font-weight: bold;">{{round($GrossIncome)}}</td>
												</tr>
												<tr>
													<td width="40%" height="20" colspan="3" style="border-top: 2px solid;"></td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
							<td width="30%" cellspacing="0" cellpadding="0" align="center" style="border-left: 2px solid;border-top: 0;font-size: 12px;color: #000000;font-weight: bold;border-right: 0;vertical-align: top;border-bottom: 0;">
								<table cellspacing="0" cellpadding="0" width="100%">
									<tr>
										<td width="30%" align="center" style="border: 0; font-size: 12px;color: #000000;">
											<table cellspacing="0" cellpadding="0" width="100%">
												<tr>
													<td width="15%" align="center" style="border-right: 2px solid;border-bottom: 2px solid;height: 20px;">Deduction</td>
													<td width="15%" align="center" style="border-bottom: 2px solid;height: 20px;">Amount</td>
												</tr>
												<tr>
													<td width="15%" align="center" height="5" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
													<td width="15%" align="center" height="5" style="text-align: right;padding-right: 3px"></td>
												</tr>
												<tr>
													<td width="15%" align="center" style="border-right: 2px solid;text-align: left;padding-left: 4px;">P.F</td>
													<td width="15%" align="center" style="text-align: right;padding-right: 3px">{{$PF}}</td>
												</tr>
												<tr>
													<td width="15%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
													<td width="15%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
												</tr>
												<tr>
													<td width="15%" align="center" style="border-right: 2px solid;text-align: left;padding-left: 4px;">ESI</td>
													<td width="15%" align="center" style="text-align: right;padding-right: 3px">{{$ESI}}</td>
												</tr>
												<tr>
													<td width="15%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
													<td width="15%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
												</tr>
												<tr>
													<td width="15%" align="center" style="border-right: 2px solid;text-align: left;padding-left: 4px;">P.T.</td>
													<td width="15%" align="center" style="text-align: right;padding-right: 3px">{{$PT}}</td>
												</tr>
												<tr>
													<td width="15%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
													<td width="15%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
												</tr>
												<tr>
													<td width="15%" align="center" style="border-right: 2px solid;text-align: left;padding-left: 4px;">TDS</td>
													<td width="15%" align="center" style="text-align: right;padding-right: 3px">{{$TDS}}</td>
												</tr>
												<tr>
													<td width="15%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
													<td width="15%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
												</tr>
												<tr>
													<td width="15%" align="center" style="border-right: 2px solid;text-align: left;padding-left: 4px;">Oth. Ded</td>
													<td width="15%" align="center" style="text-align: right;padding-right: 3px">{{$OthDed}}</td>
												</tr>
												<tr>
													<td width="15%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
													<td width="15%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
												</tr>
												<tr>
													<td width="15%" align="center" height="10" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
													<td width="15%" align="center" height="10" style="text-align: right;padding-right: 3px"></td>
												</tr>
												<tr>
													<td width="15%" align="center" height="5" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
													<td width="15%" align="center" height="5" style="text-align: right;padding-right: 3px"></td>
												</tr>
												<tr>
													<td width="15%" align="center" height="13" style="border-right: 2px solid;text-align: left;padding-left: 4px;"></td>
													<td width="15%" align="center" height="13" style="text-align: right;padding-right: 3px"></td>
												</tr>
												<tr>
													<td width="15%" align="center" height="15" style="border-right: 2px solid;text-align: left;padding-left: 4px;font-weight: bold;border-top: 1px solid;">Gross Ded.</td>
													<td width="15%" align="center" height="15" style="text-align: right;padding-right: 3px;font-weight: bold;border-top: 1px solid;">{{$GrossDed}}</td>
												</tr>
												<tr>
													<td width="15%" align="left" height="20" style="border-right: 2px solid;text-align: left;padding-left: 4px;border-top: 2px solid;">Net Amount</td>
													<td width="15%" align="left" height="20" style="text-align: right;padding-right: 3px;border-top: 2px solid;">{{round($NETAMOUNT)}}</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<!-- <tr>
				<td width="100%">
					<table border="2" width="100%" cellspacing="0" cellpadding="0" width="100%" height="20" style="border-color: #000;border-top: 0;">
						<tr style="border: 0;">
							<td align="left" height="20" style="border: 0; font-size: 12px;color: #000000;font-weight: bold;padding-left: 3px;">Rupees <em>One Thousand Only</em></td>
							<td width="30%" align="left" height="20" style="border-left: 2px solid;border-bottom: 0;border-top: 0;font-size: 12px;color: #000000;font-weight: bold;border-right: 0;">
								<table cellspacing="0" cellpadding="0" height="20" width="100%">
									<tr>
										<td width="15%" align="left" height="20" style="border-right: 2px solid;text-align: left;padding-left: 4px;">Net Amount</td>
										<td width="15%" align="left" height="20" style="text-align: right;padding-right: 3px">680</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr> -->
			<tr>
				<td width="100%">
					<table border="2" cellspacing="0" cellpadding="0" width="100%" height="20" style="border-color: #000;border-top: 0;">
						<tr style="border: 0;">
							<td width="100%" align="center" height="20" style="border: 0; font-size: 12px;color: #000000;font-weight: bold">This is computer generated document, this doesn't require a signature.</td>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>
