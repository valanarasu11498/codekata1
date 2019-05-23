#include <stdio.h>
#include<string.h>
int main()
{
    int n,c=0,i=1;
    scanf("%d",&n);
    while(i<=n)
    {
        c=c+i;
        i=i+1;
    }
    printf("%d",c);
    return 0;
}
