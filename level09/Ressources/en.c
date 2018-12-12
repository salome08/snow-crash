#include <stdio.h>
#include <string.h>

int main (int ac, char **av) {

	if (ac != 2) {
		printf("%s\n", av[1]);
		return (0);
	}
	int i = -1;
	while (++i < strlen(av[1])) {
		printf("%c", av[1][i] - i);
	}
	return (0);
}
