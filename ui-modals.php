<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>
		<?php include 'header.php'; ?>
		
		<div class="right-sidebar">
		<?php include 'rightbar.php'; ?>
		</div>

		<?php include 'sidebar.php'; ?>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4>Modals</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											UI Modals
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<!-- Large modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Large modal</h5>
								<a
									href=""
									class="btn-block"
									data-toggle="modal"
									data-target="#bd-example-modal-lg"
									type="button"
								>
									<img src="vendors/images/modal-img1.jpg" alt="modal" />
								</a>
								<div
									class="modal fade bs-example-modal-lg"
									id="bd-example-modal-lg"
									tabindex="-1"
									role="dialog"
									aria-labelledby="myLargeModalLabel"
									aria-hidden="true"
								>
									<div class="modal-dialog modal-lg modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													Large modal
												</h4>
												<button
													type="button"
													class="close"
													data-dismiss="modal"
													aria-hidden="true"
												>
													×
												</button>
											</div>
											<div class="modal-body">
												
												<form>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Text</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" type="text" placeholder="Johnny Brown">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Search</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" placeholder="Search Here" type="search">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Email</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" value="bootstrap@example.com" type="email">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">URL</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" value="https://getbootstrap.com" type="url">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" value="1-(111)-111-1111" type="tel">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Password</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" value="password" type="password">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Number</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" value="100" type="number">
														</div>
													</div>
													<div class="form-group row">
														<label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Date and time</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Date</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control date-picker" placeholder="Select Date" type="text">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Month</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control month-picker" placeholder="Select Month" type="text">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Time</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control time-picker td-input" placeholder="Select time" type="text" readonly="">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Select</label>
														<div class="col-sm-12 col-md-10">
															<select class="custom-select col-12">
																<option selected="">Choose...</option>
																<option value="1">One</option>
																<option value="2">Two</option>
																<option value="3">Three</option>
															</select>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Color</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" value="#563d7c" type="color">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Input Range</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" value="50" type="range">
														</div>
													</div>
												</form>
							
											</div>
											<div class="modal-footer">
												<button
													type="button"
													class="btn btn-secondary"
													data-dismiss="modal"
												>
													Close
												</button>
												<button type="button" class="btn btn-primary">
													Save changes
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Medium modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Medium modal</h5>
								<a
									href="#"
									class="btn-block"
									data-toggle="modal"
									data-target="#Medium-modal"
									type="button"
								>
									<img src="vendors/images/modal-img2.jpg" alt="modal" />
								</a>
								<div
									class="modal fade"
									id="Medium-modal"
									tabindex="-1"
									role="dialog"
									aria-labelledby="myLargeModalLabel"
									aria-hidden="true"
								>
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													Large modal
												</h4>
												<button
													type="button"
													class="close"
													data-dismiss="modal"
													aria-hidden="true"
												>
													×
												</button>
											</div>
											<div class="modal-body">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua. Ut enim ad minim veniam, quis
													nostrud exercitation ullamco laboris nisi ut aliquip
													ex ea commodo consequat. Duis aute irure dolor in
													reprehenderit in voluptate velit esse cillum dolore eu
													fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia
													deserunt mollit anim id est laborum.
												</p>
											</div>
											<div class="modal-footer">
												<button
													type="button"
													class="btn btn-secondary"
													data-dismiss="modal"
												>
													Close
												</button>
												<button type="button" class="btn btn-primary">
													Save changes
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Small modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Small modal</h5>
								<a
									href="#"
									class="btn-block"
									data-toggle="modal"
									data-target="#small-modal"
									type="button"
								>
									<img src="vendors/images/modal-img3.jpg" alt="modal" />
								</a>
								<div
									class="modal fade"
									id="small-modal"
									tabindex="-1"
									role="dialog"
									aria-labelledby="myLargeModalLabel"
									aria-hidden="true"
								>
									<div class="modal-dialog modal-sm modal-dialog-centered">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">
													Large modal
												</h4>
												<button
													type="button"
													class="close"
													data-dismiss="modal"
													aria-hidden="true"
												>
													×
												</button>
											</div>
											<div class="modal-body">
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua.
												</p>
											</div>
											<div class="modal-footer">
												<button
													type="button"
													class="btn btn-secondary"
													data-dismiss="modal"
												>
													Close
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Login modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Login modal</h5>
								<a
									href="#"
									class="btn-block"
									data-backdrop="static"
									data-toggle="modal"
									data-target="#login-modal"
									type="button"
								>
									<img src="vendors/images/modal-img2.jpg" alt="modal" />
								</a>
								<div
									class="modal fade"
									id="login-modal"
									tabindex="-1"
									role="dialog"
									aria-labelledby="myLargeModalLabel"
									aria-hidden="true"
								>
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content">
											<div
												class="login-box bg-white box-shadow border-radius-10"
											>
												<div class="login-title">
													<h2 class="text-center text-primary">
														Login To DeskApp
													</h2>
												</div>
												<form>
													<div class="select-role">
														<div
															class="btn-group btn-group-toggle"
															data-toggle="buttons"
														>
															<label class="btn active">
																<input type="radio" name="options" id="admin" />
																<div class="icon">
																	<img
																		src="vendors/images/briefcase.svg"
																		class="svg"
																		alt=""
																	/>
																</div>
																<span>I'm</span>
																Manager
															</label>
															<label class="btn">
																<input type="radio" name="options" id="user" />
																<div class="icon">
																	<img
																		src="vendors/images/person.svg"
																		class="svg"
																		alt=""
																	/>
																</div>
																<span>I'm</span>
																Employee
															</label>
														</div>
													</div>
													<div class="input-group custom">
														<input
															type="text"
															class="form-control form-control-lg"
															placeholder="Username"
														/>
														<div class="input-group-append custom">
															<span class="input-group-text"
																><i class="icon-copy dw dw-user1"></i
															></span>
														</div>
													</div>
													<div class="input-group custom">
														<input
															type="password"
															class="form-control form-control-lg"
															placeholder="**********"
														/>
														<div class="input-group-append custom">
															<span class="input-group-text"
																><i class="dw dw-padlock1"></i
															></span>
														</div>
													</div>
													<div class="row pb-30">
														<div class="col-6">
															<div class="custom-control custom-checkbox">
																<input
																	type="checkbox"
																	class="custom-control-input"
																	id="customCheck1"
																/>
																<label
																	class="custom-control-label"
																	for="customCheck1"
																	>Remember</label
																>
															</div>
														</div>
														<div class="col-6">
															<div class="forgot-password">
																<a href="forgot-password.html"
																	>Forgot Password</a
																>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-12">
															<div class="input-group mb-0">
																<!--
																use code for form submit
																<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
															-->
																<a
																	class="btn btn-primary btn-lg btn-block"
																	href="index.html"
																	>Sign In</a
																>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Alert modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Alert modal</h5>
								<a
									href="#"
									class="btn-block"
									data-toggle="modal"
									data-target="#alert-modal"
									type="button"
								>
									<img src="vendors/images/modal-img3.jpg" alt="modal" />
								</a>
								<div
									class="modal fade"
									id="alert-modal"
									tabindex="-1"
									role="dialog"
									aria-labelledby="myLargeModalLabel"
									aria-hidden="true"
								>
									<div class="modal-dialog modal-sm modal-dialog-centered">
										<div class="modal-content bg-danger text-white">
											<div class="modal-body text-center">
												<h3 class="text-white mb-15">
													<i class="fa fa-exclamation-triangle"></i> Alert
												</h3>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua.
												</p>
												<button
													type="button"
													class="btn btn-light"
													data-dismiss="modal"
												>
													Ok
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Warning modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Warning modal</h5>
								<a
									href="#"
									class="btn-block"
									data-toggle="modal"
									data-target="#warning-modal"
									type="button"
								>
									<img src="vendors/images/modal-img3.jpg" alt="modal" />
								</a>
								<div
									class="modal fade"
									id="warning-modal"
									tabindex="-1"
									role="dialog"
									aria-labelledby="myLargeModalLabel"
									aria-hidden="true"
								>
									<div class="modal-dialog modal-sm modal-dialog-centered">
										<div class="modal-content bg-warning">
											<div class="modal-body text-center">
												<h3 class="mb-15">
													<i class="fa fa-exclamation-triangle"></i> Warning
												</h3>
												<p>
													Lorem ipsum dolor sit amet, consectetur adipisicing
													elit, sed do eiusmod tempor incididunt ut labore et
													dolore magna aliqua.
												</p>
												<button
													type="button"
													class="btn btn-dark"
													data-dismiss="modal"
												>
													Ok
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Success modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Success modal</h5>
								<a
									href="#"
									class="btn-block"
									data-toggle="modal"
									data-target="#success-modal"
									type="button"
								>
									<img src="vendors/images/modal-img3.jpg" alt="modal" />
								</a>
								<div
									class="modal fade"
									id="success-modal"
									tabindex="-1"
									role="dialog"
									aria-labelledby="exampleModalCenterTitle"
									aria-hidden="true"
								>
									<div
										class="modal-dialog modal-dialog-centered"
										role="document"
									>
										<div class="modal-content">
											<div class="modal-body text-center font-18">
												<h3 class="mb-20">Form Submitted!</h3>
												<div class="mb-30 text-center">
													<img src="vendors/images/success.png" />
												</div>
												Lorem ipsum dolor sit amet, consectetur adipisicing
												elit, sed do eiusmod
											</div>
											<div class="modal-footer justify-content-center">
												<button
													type="button"
													class="btn btn-primary"
													data-dismiss="modal"
												>
													Done
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Confirmation modal -->
						<div class="col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h5 class="h4">Confirmation modal</h5>
								<a
									href="#"
									class="btn-block"
									data-toggle="modal"
									data-target="#confirmation-modal"
									type="button"
								>
									<img src="vendors/images/modal-img3.jpg" alt="modal" />
								</a>
								<div
									class="modal fade"
									id="confirmation-modal"
									tabindex="-1"
									role="dialog"
									aria-hidden="true"
								>
									<div
										class="modal-dialog modal-dialog-centered"
										role="document"
									>
										<div class="modal-content">
											<div class="modal-body text-center font-18">
												<h4 class="padding-top-30 mb-30 weight-500">
													Are you sure you want to continue?
												</h4>
												<div
													class="padding-bottom-30 row"
													style="max-width: 170px; margin: 0 auto"
												>
													<div class="col-6">
														<button
															type="button"
															class="btn btn-secondary border-radius-100 btn-block confirmation-btn"
															data-dismiss="modal"
														>
															<i class="fa fa-times"></i>
														</button>
														NO
													</div>
													<div class="col-6">
														<button
															type="button"
															class="btn btn-primary border-radius-100 btn-block confirmation-btn"
															data-dismiss="modal"
														>
															<i class="fa fa-check"></i>
														</button>
														YES
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-wrap pd-20 mb-20 card-box">
					DeskApp - Bootstrap 4 Admin Template By
					<a href="https://github.com/dropways" target="_blank"
						>Ankit Hingarajiya</a
					>
				</div>
			</div>
		</div>
		<!-- welcome modal start -->
		<div class="welcome-modal">
			<button class="welcome-modal-close">
				<i class="bi bi-x-lg"></i>
			</button>
			<iframe
				class="w-100 border-0"
				src="https://embed.lottiefiles.com/animation/31548"
			></iframe>
			<div class="text-center">
				<h3 class="h5 weight-500 text-center mb-2">
					Open source
					<span role="img" aria-label="gratitude">❤️</span>
				</h3>
				<div class="pb-2">
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-star"
						data-size="large"
						data-show-count="true"
						aria-label="Star dropways/deskapp dashboard on GitHub"
						>Star</a
					>
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp/fork"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-repo-forked"
						data-size="large"
						data-show-count="true"
						aria-label="Fork dropways/deskapp dashboard on GitHub"
						>Fork</a
					>
				</div>
			</div>
			<div class="text-center mb-1">
				<div>
					<a
						href="https://github.com/dropways/deskapp"
						target="_blank"
						class="btn btn-light btn-block btn-sm"
					>
						<span class="text-danger weight-600">STAR US</span>
						<span class="weight-600">ON GITHUB</span>
						<i class="fa fa-github"></i>
					</a>
				</div>
				<script
					async
					defer="defer"
					src="https://buttons.github.io/buttons.js"
				></script>
			</div>
			<a
				href="https://github.com/dropways/deskapp"
				target="_blank"
				class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
			>
				DOWNLOAD
				<i class="fa fa-download"></i>
			</a>
			<p class="font-14 text-center mb-1 d-none d-md-block">
				Available in the following technologies:
			</p>
			<div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
				<i class="fa fa-html5"></i>
			</div>
		</div>
		<button class="welcome-modal-btn">
			<i class="fa fa-download"></i> Download
		</button>
		<!-- welcome modal end -->
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
