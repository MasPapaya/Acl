import os
import mmap
import re

def get_strings() :
	result = []

	for dirname, dirnames, filenames in os.walk('.'):
		for filename in filenames:
			ext = extension = os.path.splitext(filename)[1];
			if (ext == '.php' or ext == '.ctp'):
				size = os.stat(os.path.join(dirname, filename)).st_size
				if size > 0:
					f = open(os.path.join(dirname, filename))
					data = mmap.mmap(f.fileno(), size, access=mmap.ACCESS_READ)
					matchs = re.findall(r"__\(\S([\w\s.!\xc2\x7b\x7d\x3a\x2c\x3f]+)\S[)]", data)
					if len(matchs) > 0:
						for match in matchs:
							# if match
							result.append(match)
					if (not f.closed):
						f.close()

	return result;


def main():
	strings = get_strings();
	strings = list(set(strings))
	strings = sorted(strings)
	for string in strings:
		string = string.replace("__('", '').replace("')", '')
		string = string.replace('__("', '').replace('")', '')
		print 'msgid "' + string + '"'
		print 'msgstr ""'
		print

if __name__ == "__main__":
	main()
	