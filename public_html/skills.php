<!DOCTYPE html>
<html>
	<head>
		<?php require_once ("head.php");?>
	</head>

	<body>
		<?php require_once ("header.php");?>

		<div class="container" id="skills">
			<div class="row">
				<div class="col mt-2">
					<h3 class="text-left mb-md-3 mb-4">Skills and Experience</h3>
					<div class="card-deck mb-4 p-md-2 p-3" style="background-color: #e3f2fd">
						<div class="card mb-5 my-md-3">
							<div class="card-body">
								<h4 class="card-title mb-3">KindHub</h4>
								<p class="card-text mb-4">Connecting volunteers and donors to those in need. No middle man, no hoops to jump through. Users can
									create their own hubs which anyone can donate anonymously to, and distribute goods as they see fit.</p>
								<h5 class="card-subtitle">Responsibilities</h5>2
								<ul>
									<li>mySQL database creation and manipulation</li>
									<li>Implementation with angular framework</li>
									<li>PHP class creation</li>
									<li>Creation and testing of APIs.</li>
								</ul>
							</div>
						</div>

						<div class="card mb-1 my-md-3">
							<div class="card-body">
								<h4 class="card-title">Skillset</h4>
								<p class="card-text"><strong>Adaptability:</strong> high performance in any work environment.</p>
								<p class="card-text"><strong>Proficiency:</strong> learns and excels in new skills quickly and efficiently.</p>
								<p class="card-text"><strong>Teamwork:</strong> experience working in teams on a variety of projects.</p>
								<p class="card-text"><strong>Initiative:</strong> willing and able to spearhead new and intimidating tasks.</p>
								<p class="card-text">Bringing unique problem solving solutions to any project, I am more than comfortable working both
									independently and in a team. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container" id="languages">
			<div class="row">
				<div class="col mb-4 mt-3">
					<h3 class="text-left">Platforms and Languages</h3>
					</div>
			</div>
			<div class="row mb-2">
				<div class="col">
					<div class="jumbotron" style="background-color: #e3f2fd">
						<table class="table table-responsive table-light">
							<thead>
								<tr>
									<th>Language or Platform</th>
									<th class="align-middle">Proficiencies</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="align-middle">Object Oriented: PHP/Java</td>
									<td class="align-middle">Class creation, functions, inheritance, traits, project structure, recursion</td>
								</tr>
								<tr>
									<td class="align-middle">HTML5</td>
									<td class="align-middle">Syntax and structure, bootstrap architecture, Javascript integration</td>
								</tr>
								<tr>
									<td class="align-middle">Javascript and Angular</td>
									<td class="align-middle">Plaintext Javascript, script creation, design patterns, working within the Angular framework</td>
								</tr>
								<tr>
									<td class="align-middle">CSS</td>
									<td class="align-middle">Custom style sheets, styling in conjunction with Bootstrap architecture</td>
								</tr>
								<tr>
									<td class="align-middle">mySQL</td>
									<td class="align-middle">Data design, database manipulation through PHP, database manipulation through mySQL command line</td>
								</tr>
								<tr>
									<td class="align-middle">Operating Systems</td>
									<td class="align-middle">Windows power user, navigation through the command line, troubleshooting,
										Linux command line through an SSH</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="container" id="contact">
			<div class="row">
				<div class="col mb-4 mt-1">
					<h3 class="text-left">Contact</h3>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="jumbotron" style="background-color: #e3f2fd">
						<form id="contact-form" action="php/mailer.php" method="post" novalidate>
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" name="name" id="name" placeholder="Name">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
							</div>
							<div class="form-group">
								<label for="message">Message</label>
								<textarea class="form-control" name="message" id="message" rows="4" placeholder="Message (2000 char max)"></textarea>
							</div>

								<div class="g-recaptcha mb-2" data-sitekey="6LdblToUAAAAAO6G2ISDJMvQGs23ozV1PaBs0WBQ"></div>

								<button id="send" class="btn" type="submit">Send</button>
						</form>
						<div class="row">
							<div class="col">
								<div id="output-area"></div>
							</div>
						</div>
						<div class="mt-3">
							<ul class="nav">
								<li class="nav-item">
									<a href="https://www.linkedin.com/in/calder-benjamin/" class="nav-link active" target="_blank">LinkedIn</a>
								</li>
								<li class="nav-item">
									<a href="https://github.com/Cbenjamin1207" class="nav-link active" target="_blank">GitHub</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="#top" class="nav-link active text-center mb-5 lead">Top</a>
	</body>
</html>
