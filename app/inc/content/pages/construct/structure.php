	<h3 class="fluid-text monolisk" id="structure"><strong>Structure</strong></h3>
	<p class="bitstream">There are two primary directories that make up the framework structure: <em>app</em> and <em>core</em>. The <em>app</em> directory is for files that will be frequently modified, whereas the <em>core</em> is for files that are static and unchanging. Below is an overview of the file structure.</p>
	<div class="flex bitstream"><div class="padded half">
		<h4 class="flow-text charcoal">File Structure</h4>
		<ul class="none files">
			<li><i class="php"></i> index.php</li>
			<li><i class="php"></i> php_boilerplate.php</li>
			<li><i class="html"></i> boilerplate.html</li>
			<li><i class="folder-plain-open"></i> /app
				<ul class="indent none">
					<li><i class="folder-plain-open"></i> /data
						<ul class="none indent">
							<li><i class="folder-plain"></i> /csv</li>
							<li><i class="folder-plain"></i> /json</li>
							<li><i class="folder-plain"></i> /sql</li>
							<li><i class="folder-plain"></i> /xml</li>
						</ul>
					</li>
					<li><i class="folder-plain-open"></i> /files
						<ul class="none indent">
							<li><i class="folder-plain"></i> /audio</li>
							<li><i class="folder-plain"></i> /docs</li>
							<li><i class="folder-plain"></i> /images</li>
							<li><i class="folder-plain"></i> /video</li>
						</ul>
					</li>
					<li><i class="folder-plain-open"></i> /inc
						<ul class="none indent">
							<li><i class="folder-plain-open"></i> /content
								<ul class="none indent">
									<li><i class="folder-plain"></i> /ajax</li>
									<li><i class="folder-plain"></i> /pages</li>
									<li><i class="folder-plain"></i> /ui</li>
								</ul>
							</li>
							<li><i class="folder-plain"></i> /functions</li>
						</ul>
					</li>
					<li><i class="folder-plain-open"></i> /themes
						<ul class="none indent">
							<li><i class="folder-plain"></i> /default</li>
						</ul>
					</li>
				</ul>
			</li>
			<li><i class="folder-plain-open"></i> /core
				<ul class="indent none">
					<li><i class="php"></i> bekah.php</li>
					<li><i class="php"></i> brad.php</li>
					<li><i class="php"></i> core.php</li>
					<li><i class="php"></i> kat.php</li>
					<li><i class="folder-plain-open"></i> /css
						<ul class="indent none">
							<li><i class="folder-plain"></i> /fonts</li>
							<li><i class="folder-plain"></i> /icons</li>
							<li><i class="folder-plain"></i> /images</li>
						</ul>
					</li>
					<li><i class="folder-plain-open"></i> /data
						<ul class="indent none">
							<li><i class="folder-plain"></i> /csv</li>
							<li><i class="folder-plain"></i> /json</li>
							<li><i class="folder-plain"></i> /sql</li>
							<li><i class="folder-plain"></i> /xml</li>
						</ul>
					</li>
					<li><i class="folder-plain"></i> /files</li>
					<li><i class="folder-plain-open"></i> /jab
						<ul class="none indent">
							<li><i class="folder-plain"></i> /plugins</li>
						</ul>
					</li>
					<li><i class="folder-plain-open"></i> /molds
						<ul class="indent none">
							<li><i class="folder-plain"></i> /boards</li>
							<li><i class="folder-plain"></i> /panels</li>
							<li><i class="folder-plain"></i> /tiles</li>
							<li><i class="php"></i> config.php</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</div><div class="padded half">
		<h4 class="flow-text charcoal">App Directory</h4>
		<p class="bitstream">The <em>app</em> directory contains theme files, custom data, additional files, and PHP content to be included on pages. Some example files are included as part of the downloaded package.</p>
		<p class="padded disabled box-s-k" style="margin-top: 1rem;">
			<strong>Data Folder</strong><br /><small>Contains data files (ex. CSV, XML, etc), to be used throughout app.</small><br /><br />
			<strong>Files Folder</strong><br /><small>Miscellaneous files (images, audio, video, documents, etc.).</small><br /><br />
			<strong>Inc Folder</strong><br /><small>PHP-based content (pages and UI components) and custom PHP function files to be included on main pages or for use within an AJAX interface.</small><br /><br />
			<strong>Themes Folder</strong><br /><small>Any custom CSS, javascript, and other media files.</small>
		</p>
		<p style="margin-top: 1rem;">It is up to you how you organize the <strong><em>app</em></strong> directory. The idea is to store files here that will likely be frequently changed or updated.</p>
		<p class="spacer"></p>
		<h4 class="flow-text charcoal">Core Directory</h4>
		<p class="bitstream">The <em>core</em> directory contains all core CSS, javascript, files, data, and PHP scripts. Files in this directory are for static (unchanging) reference. More details are provided in the following sections.</p>
	</div></div>